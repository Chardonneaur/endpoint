<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\Endpoint;

use Piwik\SettingsPiwik;
use Piwik\Piwik;

class Controller extends \Piwik\Plugin\ControllerAdmin
{
    public function index()
    {
		Piwik::checkUserHasSuperUserAccess();
		$instanceurl = SettingsPiwik::getPiwikUrl();
        return $this->renderTemplate('index', array(
            'instanceurl' => $instanceurl . "matomo.php",
            'endpointready' => $instanceurl . "matomo.php?idsite=1&rec=1"
        ));
    }
}
