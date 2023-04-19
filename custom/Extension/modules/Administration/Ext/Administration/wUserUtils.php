<?php

$admin_option_defs = array();

$admin_option_defs["Administration"]["wUserUtils"] = array(
    "Administration",
    "LBL_WUSERUTILS_SETTINGS",
    "LBL_WUSERUTILS_CONFIGURE_SETTINGS_DESCRIPTION",
    "./index.php?module=Administration&action=wUserUtils",
);

$admin_option_defs["Administration"]["broadCastMessage"] = array(
    "Schedulers",
    "LBL_WUSERUTILS_BRODCAST_TITLE",
    "LBL_WUSERUTILS_BRODCAST_DESCRIPTION",
    "javascript:parent.SUGAR.App.router.navigate(\"Home/layout/broadcast-message\", {trigger: true});",
);

$admin_option_defs["Administration"]["ControlLoginTimesForUsers"] = array(
    "Users",
    "LBL_WUSERUTILS_RESTRICT_LOGIN_TITLE",
    "LBL_WUSERUTILS_RESTRICT_LOGIN_DESCRIPTION",
    "javascript:parent.SUGAR.App.router.navigate(\"Home/layout/control-users-login-times\", {trigger: true});",
);

$admin_group_header[] = array(
    "LBL_WUSERUTILS_TITLE",
    "",
    false,
    $admin_option_defs,
    "LBL_WUSERUTILS_DESCRIPTION",
);
