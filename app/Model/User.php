<?php

App::uses('AppModel', 'Model');

/**
 * User Model
 *
 * @property Course $Course
 * @property Question $Question
 * @property Section $Section
 * @property StudentData $StudentData
 * @property Subject $Subject
 */
class User extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'username';

    /**
     * Validation rules
     *
     * @var array
     */
    
    public $validate = array(
        'username' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            "isUnique" => array(
                'rule' =>'isUnique',
                'message' => 'User already exists'
            ),
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            ),
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            ),
            'lengthBetween' => array(
                'rule' => array('lengthBetween', 8, 20),
                'message' => 'Password Length must be between 8-20'
            ),
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'student', 'employee')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Course' => array(
            'className' => 'Course',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Question' => array(
            'className' => 'Question',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Section' => array(
            'className' => 'Section',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'StudentData' => array(
            'className' => 'StudentData',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Subject' => array(
            'className' => 'Subject',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );
    
    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        if (isset($this->data[$this->alias]['email'])) {
            $this->data[$this->alias]['username'] = $this->data[$this->alias]['email'];
        }
        
        return true;
    }

}
