# https://unix.stackexchange.com/questions/705445/expanding-an-argument-within-single-quotes/705451#705451
#link local bundle
ORG=${2:-survos}
echo $V;
composer config --unset repositories.$1
composer req $ORG/$1-bundle
