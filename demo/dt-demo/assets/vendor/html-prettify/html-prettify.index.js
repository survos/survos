/**
 * Bundled by jsDelivr using Rollup v2.79.1 and Terser v5.19.2.
 * Original file: /npm/html-prettify@1.0.7/src/index.js
 *
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
const t=t=>t.trim().replace(/(^(\s|\t)+|(( |\t)+)$)/gm,"");var e={mergeAttributesWithElements:e=>{const s=t(e).split("\n"),n=[];let r="";for(let t=0;t<s.length;t+=1){const e=s[t];e.endsWith("/>")?(n.push(`${r}${e.slice(0,-2)} />`),r=""):e.endsWith(">")?(n.push(`${r}${e.startsWith(">")||e.startsWith("<")?"":" "}${e}`),r=""):r+=r.length?` ${e}`:e}return n},removeEmptyLines:t};const s=(t,e={})=>{const s=e.char||" ",n=e.count||2;let r=0;const i=[];return t.reverse().reduce(((t,e)=>{i.length&&r&&i[r]&&i[r]===e.substring(1,i[r].length+1)&&(i.splice(r,1),r--);const l=[`${s.repeat(r?r*n:0)}${e}`,...t];return"</"===e.substring(0,2)&&(r++,i[r]=e.substring(2,e.length-1)),l}),[]).join("\n")},{mergeAttributesWithElements:n}=e;var r=(t,e={})=>{const r=n(t);return s(r,e)};export{r as default};
