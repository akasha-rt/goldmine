<?php

//Loop through the groupings to find grouping file you want to append to
foreach ($js_groupings as $key => $groupings) {
    foreach ($groupings as $file => $target) {
        //if the target grouping is found
        if ($target == "include/javascript/sugar_grp7.min.js") {
            //append the custom JavaScript file
            $js_groupings[$key]["custom/include/javascript/wuserutils.js"]              = "include/javascript/sugar_grp7.min.js";
            $js_groupings[$key]["custom/include/javascript/extendCollectionFilter.js"]  = "include/javascript/sugar_grp7.min.js";
            $js_groupings[$key]["custom/include/javascript/checkForBroadcast.js"]       = "include/javascript/sugar_grp7.min.js";
            $js_groupings[$key]["custom/include/javascript/afterLoginFunctionality.js"] = "include/javascript/sugar_grp7.min.js";
            $js_groupings[$key]["custom/include/javascript/_addCopyDashboard.js"]       = "include/javascript/sugar_grp7.min.js";
            // Extension plugins
            $js_groupings[$key]["custom/src/wsystems/wUserUtils/JSGroupings/plugins/component.extend.js"] = "include/javascript/sugar_grp7.min.js";
            // Customizations
            $js_groupings[$key]["custom/src/wsystems/wUserUtils/JSGroupings/ExtendFilterDropdown.js"] = "include/javascript/sugar_grp7.min.js";
            $js_groupings[$key]["custom/src/wsystems/wUserUtils/JSGroupings/ExtendFabDashboard.js"]   = "include/javascript/sugar_grp7.min.js";
        }

        break;
    }
}
