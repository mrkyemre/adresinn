<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */

/**
 * CakePHP Component & Model Code Completion
 * @author junichi11
 *
 * ==============================================
 * CakePHP Core Components
 * ==============================================
 * @property AuthComponent $Auth
 * @property AclComponent $Acl
 * @property CookieComponent $Cookie
 * @property EmailComponent $Email
 * @property RequestHandlerComponent $RequestHandler
 * @property SecurityComponent $Security
 * @property SessionComponent $Session
 */


class AppController extends Controller {

    public $components = array(
        'DebugKit.Toolbar',
        'Session',
        'Auth'=>array(

            'loginRedirect' =>array('controller'=>'Profile','action'=>'index'),
            'logoutRedirect' =>array('controller'=>'Home','action'=>'index'),
            'authError'=>'You can not access that page',
            'authenticate'=>array(
                            'Form' => array(
                                'fields'=>array(
                                'username'=>'email'
                                               )))));




    public function beforeFilter(){

        parent::beforeFilter();

        if($this->Session->check('Auth.User')){

            $checkuser = $this->Session->read('Auth.User.firstname');

            $this->set('checkuser',$checkuser);
        };

        $this->Auth->allow('welcome_index','view','register','checkuser');
    }


}

