<?php
/**
/**
 * Mail Command Controller
 * 
 * @author Rochdi B. <rochdi80tn@gmail.com>
 */

namespace s4studio\mailqueue;

use yii\base\Application;
use yii\base\BootstrapInterface;


/**
 * Class Bootstrap
 * 
 * @package s4studio\mailqueue;
 * @author Rochdi B. <rochdi80tn@gmail.com>
 * @author Kawalec E. <e.kawalec@gmail.com>
 */
class Bootstrap implements BootstrapInterface
{

    /**
     * Bootstrap method to be called during application bootstrap stage.
     * Will add the mailqueue  command to the controller map 
     *
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
      
        if ($app instanceof \yii\console\Application) {
            $app->controllerMap['mailqueue'] = 's4studio\mailqueue\commands\MailQueueController';
        }
        
    }
}