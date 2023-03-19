<?php

class CheckFunnelSettingsController extends FunnelController
{

    public function CheckPopupSettings()
    {
        $popup_settings = $this->CreatePopupSettings();
        $videoBtnHTMLResult = str_replace('\/', '/', json_encode($popup_settings['json'], JSON_UNESCAPED_UNICODE));
        $saveVersion = $this->funnel_content->Get()[0]['popup'];
        if (!is_null($saveVersion) && ($videoBtnHTMLResult == $saveVersion)) {
            echo 0;
            return false;
        } else {
            if (is_null($saveVersion)) {
                echo 0;
                return false;
            }
            echo 1;
            return false;
        }
    }

    public function CheckMainSettings()
    {
        $popup_settings = $this->CreateMainSettings();
        $videoBtnHTMLResult = str_replace('\/', '/', json_encode($popup_settings, JSON_UNESCAPED_UNICODE));
        $saveVersion = $this->funnel->Get()[0]['style_settings'];
	    $_SESSION['error'] = $saveVersion;
	    $_SESSION['error1'] = $videoBtnHTMLResult;
        if (!is_null($saveVersion) && ($videoBtnHTMLResult == $saveVersion)) {
            echo 0;
            return false;
        } else {
            if (is_null($saveVersion)) {
                echo 0;
                return false;
            }
            echo 1;
            return false;
        }
    }

    function get_content()
    {
    }

    function local_get_content()
    {
    }


    function obr()
    {
    }
}