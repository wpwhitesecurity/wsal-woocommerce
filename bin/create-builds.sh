#!/usr/bin/env bash

noGdrive=0

helpFunction()
{
   echo ""
   echo "Usage: $0 -gh"
   echo -e "\t-g Upload the builds to the GDrive"
   echo -e "\t-h This help screeen"
   exit 1 # Exit script after printing help
}

while getopts "hgfpndso" opt
do
   case "$opt" in
      g ) noGdrive=$((noGdrive+1)) ;;
      h ) helpFunction ;;
   esac
done

pluginDir="wp-activity-log-for-woocommerce"

year=$(date +%Y)
month=$(date +%m)
day=$(date +%d)

cd ../

zip -r $year$month$day-$pluginDir.zip $pluginDir/* -x "**/.*" -x "**/bin/*" -x "bin/*"

if [ $noGdrive != 0 ]
then
    gdrive upload --parent 15ydDa4hNvvXkozHeOIa5QllXJUGpxc7E $year$month$day-$pluginDir.zip --service-account gdrive.json
fi

cd $pluginDir