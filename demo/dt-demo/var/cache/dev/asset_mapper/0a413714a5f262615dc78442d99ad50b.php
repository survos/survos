O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:90:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/adapters/xhr.js";s:10:"publicPath";s:96:"/assets/@survos/api-grid/node_modules/axios/lib/adapters/xhr-853d2f9950242fbc6520610bdd614ca1.js";s:23:"publicPathWithoutDigest";s:63:"/assets/@survos/api-grid/node_modules/axios/lib/adapters/xhr.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:8386:"'use strict';

import utils from '../utils.js';
import settle from '../core/settle.js';
import cookies from '../helpers/cookies.js';
import buildURL from '../helpers/buildURL.js';
import buildFullPath from '../core/buildFullPath.js';
import isURLSameOrigin from '../helpers/isURLSameOrigin.js';
import transitionalDefaults from '../defaults/transitional.js';
import AxiosError from '../core/AxiosError.js';
import CanceledError from '../cancel/CanceledError.js';
import parseProtocol from '../helpers/parseProtocol.js';
import platform from '../platform/index.js';
import AxiosHeaders from '../core/AxiosHeaders.js';
import speedometer from '../helpers/speedometer.js';

function progressEventReducer(listener, isDownloadStream) {
  let bytesNotified = 0;
  const _speedometer = speedometer(50, 250);

  return e => {
    const loaded = e.loaded;
    const total = e.lengthComputable ? e.total : undefined;
    const progressBytes = loaded - bytesNotified;
    const rate = _speedometer(progressBytes);
    const inRange = loaded <= total;

    bytesNotified = loaded;

    const data = {
      loaded,
      total,
      progress: total ? (loaded / total) : undefined,
      bytes: progressBytes,
      rate: rate ? rate : undefined,
      estimated: rate && total && inRange ? (total - loaded) / rate : undefined,
      event: e
    };

    data[isDownloadStream ? 'download' : 'upload'] = true;

    listener(data);
  };
}

const isXHRAdapterSupported = typeof XMLHttpRequest !== 'undefined';

export default isXHRAdapterSupported && function (config) {
  return new Promise(function dispatchXhrRequest(resolve, reject) {
    let requestData = config.data;
    const requestHeaders = AxiosHeaders.from(config.headers).normalize();
    const responseType = config.responseType;
    let onCanceled;
    function done() {
      if (config.cancelToken) {
        config.cancelToken.unsubscribe(onCanceled);
      }

      if (config.signal) {
        config.signal.removeEventListener('abort', onCanceled);
      }
    }

    if (utils.isFormData(requestData)) {
      if (platform.isStandardBrowserEnv || platform.isStandardBrowserWebWorkerEnv) {
        requestHeaders.setContentType(false); // Let the browser set it
      } else {
        requestHeaders.setContentType('multipart/form-data;', false); // mobile/desktop app frameworks
      }
    }

    let request = new XMLHttpRequest();

    // HTTP basic authentication
    if (config.auth) {
      const username = config.auth.username || '';
      const password = config.auth.password ? unescape(encodeURIComponent(config.auth.password)) : '';
      requestHeaders.set('Authorization', 'Basic ' + btoa(username + ':' + password));
    }

    const fullPath = buildFullPath(config.baseURL, config.url);

    request.open(config.method.toUpperCase(), buildURL(fullPath, config.params, config.paramsSerializer), true);

    // Set the request timeout in MS
    request.timeout = config.timeout;

    function onloadend() {
      if (!request) {
        return;
      }
      // Prepare the response
      const responseHeaders = AxiosHeaders.from(
        'getAllResponseHeaders' in request && request.getAllResponseHeaders()
      );
      const responseData = !responseType || responseType === 'text' || responseType === 'json' ?
        request.responseText : request.response;
      const response = {
        data: responseData,
        status: request.status,
        statusText: request.statusText,
        headers: responseHeaders,
        config,
        request
      };

      settle(function _resolve(value) {
        resolve(value);
        done();
      }, function _reject(err) {
        reject(err);
        done();
      }, response);

      // Clean up request
      request = null;
    }

    if ('onloadend' in request) {
      // Use onloadend if available
      request.onloadend = onloadend;
    } else {
      // Listen for ready state to emulate onloadend
      request.onreadystatechange = function handleLoad() {
        if (!request || request.readyState !== 4) {
          return;
        }

        // The request errored out and we didn't get a response, this will be
        // handled by onerror instead
        // With one exception: request that using file: protocol, most browsers
        // will return status as 0 even though it's a successful request
        if (request.status === 0 && !(request.responseURL && request.responseURL.indexOf('file:') === 0)) {
          return;
        }
        // readystate handler is calling before onerror or ontimeout handlers,
        // so we should call onloadend on the next 'tick'
        setTimeout(onloadend);
      };
    }

    // Handle browser request cancellation (as opposed to a manual cancellation)
    request.onabort = function handleAbort() {
      if (!request) {
        return;
      }

      reject(new AxiosError('Request aborted', AxiosError.ECONNABORTED, config, request));

      // Clean up request
      request = null;
    };

    // Handle low level network errors
    request.onerror = function handleError() {
      // Real errors are hidden from us by the browser
      // onerror should only fire if it's a network error
      reject(new AxiosError('Network Error', AxiosError.ERR_NETWORK, config, request));

      // Clean up request
      request = null;
    };

    // Handle timeout
    request.ontimeout = function handleTimeout() {
      let timeoutErrorMessage = config.timeout ? 'timeout of ' + config.timeout + 'ms exceeded' : 'timeout exceeded';
      const transitional = config.transitional || transitionalDefaults;
      if (config.timeoutErrorMessage) {
        timeoutErrorMessage = config.timeoutErrorMessage;
      }
      reject(new AxiosError(
        timeoutErrorMessage,
        transitional.clarifyTimeoutError ? AxiosError.ETIMEDOUT : AxiosError.ECONNABORTED,
        config,
        request));

      // Clean up request
      request = null;
    };

    // Add xsrf header
    // This is only done if running in a standard browser environment.
    // Specifically not if we're in a web worker, or react-native.
    if (platform.isStandardBrowserEnv) {
      // Add xsrf header
      const xsrfValue = (config.withCredentials || isURLSameOrigin(fullPath))
        && config.xsrfCookieName && cookies.read(config.xsrfCookieName);

      if (xsrfValue) {
        requestHeaders.set(config.xsrfHeaderName, xsrfValue);
      }
    }

    // Remove Content-Type if data is undefined
    requestData === undefined && requestHeaders.setContentType(null);

    // Add headers to the request
    if ('setRequestHeader' in request) {
      utils.forEach(requestHeaders.toJSON(), function setRequestHeader(val, key) {
        request.setRequestHeader(key, val);
      });
    }

    // Add withCredentials to request if needed
    if (!utils.isUndefined(config.withCredentials)) {
      request.withCredentials = !!config.withCredentials;
    }

    // Add responseType to request if needed
    if (responseType && responseType !== 'json') {
      request.responseType = config.responseType;
    }

    // Handle progress if needed
    if (typeof config.onDownloadProgress === 'function') {
      request.addEventListener('progress', progressEventReducer(config.onDownloadProgress, true));
    }

    // Not all browsers support upload events
    if (typeof config.onUploadProgress === 'function' && request.upload) {
      request.upload.addEventListener('progress', progressEventReducer(config.onUploadProgress));
    }

    if (config.cancelToken || config.signal) {
      // Handle cancellation
      // eslint-disable-next-line func-names
      onCanceled = cancel => {
        if (!request) {
          return;
        }
        reject(!cancel || cancel.type ? new CanceledError(null, config, request) : cancel);
        request.abort();
        request = null;
      };

      config.cancelToken && config.cancelToken.subscribe(onCanceled);
      if (config.signal) {
        config.signal.aborted ? onCanceled() : config.signal.addEventListener('abort', onCanceled);
      }
    }

    const protocol = parseProtocol(fullPath);

    if (protocol && platform.protocols.indexOf(protocol) === -1) {
      reject(new AxiosError('Unsupported protocol ' + protocol + ':', AxiosError.ERR_BAD_REQUEST, config));
      return;
    }


    // Send the request
    request.send(requestData || null);
  });
}
";s:6:"digest";s:32:"853d2f9950242fbc6520610bdd614ca1";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:13:{i:0;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:56:"/assets/@survos/api-grid/node_modules/axios/lib/utils.js";s:16:"assetLogicalPath";s:48:"@survos/api-grid/node_modules/axios/lib/utils.js";s:15:"assetSourcePath";s:83:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/utils.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:1;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:62:"/assets/@survos/api-grid/node_modules/axios/lib/core/settle.js";s:16:"assetLogicalPath";s:54:"@survos/api-grid/node_modules/axios/lib/core/settle.js";s:15:"assetSourcePath";s:89:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/core/settle.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:2;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:66:"/assets/@survos/api-grid/node_modules/axios/lib/helpers/cookies.js";s:16:"assetLogicalPath";s:58:"@survos/api-grid/node_modules/axios/lib/helpers/cookies.js";s:15:"assetSourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/helpers/cookies.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:3;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:67:"/assets/@survos/api-grid/node_modules/axios/lib/helpers/buildURL.js";s:16:"assetLogicalPath";s:59:"@survos/api-grid/node_modules/axios/lib/helpers/buildURL.js";s:15:"assetSourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/helpers/buildURL.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:4;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:69:"/assets/@survos/api-grid/node_modules/axios/lib/core/buildFullPath.js";s:16:"assetLogicalPath";s:61:"@survos/api-grid/node_modules/axios/lib/core/buildFullPath.js";s:15:"assetSourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/core/buildFullPath.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:5;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:74:"/assets/@survos/api-grid/node_modules/axios/lib/helpers/isURLSameOrigin.js";s:16:"assetLogicalPath";s:66:"@survos/api-grid/node_modules/axios/lib/helpers/isURLSameOrigin.js";s:15:"assetSourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/helpers/isURLSameOrigin.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:6;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:72:"/assets/@survos/api-grid/node_modules/axios/lib/defaults/transitional.js";s:16:"assetLogicalPath";s:64:"@survos/api-grid/node_modules/axios/lib/defaults/transitional.js";s:15:"assetSourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/defaults/transitional.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:7;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:66:"/assets/@survos/api-grid/node_modules/axios/lib/core/AxiosError.js";s:16:"assetLogicalPath";s:58:"@survos/api-grid/node_modules/axios/lib/core/AxiosError.js";s:15:"assetSourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/core/AxiosError.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:8;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:71:"/assets/@survos/api-grid/node_modules/axios/lib/cancel/CanceledError.js";s:16:"assetLogicalPath";s:63:"@survos/api-grid/node_modules/axios/lib/cancel/CanceledError.js";s:15:"assetSourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/cancel/CanceledError.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:9;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:72:"/assets/@survos/api-grid/node_modules/axios/lib/helpers/parseProtocol.js";s:16:"assetLogicalPath";s:64:"@survos/api-grid/node_modules/axios/lib/helpers/parseProtocol.js";s:15:"assetSourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/helpers/parseProtocol.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:10;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:65:"/assets/@survos/api-grid/node_modules/axios/lib/platform/index.js";s:16:"assetLogicalPath";s:57:"@survos/api-grid/node_modules/axios/lib/platform/index.js";s:15:"assetSourcePath";s:92:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/platform/index.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:11;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:68:"/assets/@survos/api-grid/node_modules/axios/lib/core/AxiosHeaders.js";s:16:"assetLogicalPath";s:60:"@survos/api-grid/node_modules/axios/lib/core/AxiosHeaders.js";s:15:"assetSourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/core/AxiosHeaders.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:12;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:70:"/assets/@survos/api-grid/node_modules/axios/lib/helpers/speedometer.js";s:16:"assetLogicalPath";s:62:"@survos/api-grid/node_modules/axios/lib/helpers/speedometer.js";s:15:"assetSourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/helpers/speedometer.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}}s:11:"logicalPath";s:55:"@survos/api-grid/node_modules/axios/lib/adapters/xhr.js";}