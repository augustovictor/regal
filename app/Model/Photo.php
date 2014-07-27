<?php
App::uses('AppModel', 'Model');
/**
 * Photo Model
 *
 * @property Albun $Albun
 */
class Photo extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'photo';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'titulo';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'titulo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'local' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'albun_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'path' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'O upload falhou.',
				'allowEmpty' => true,
			),
			'mimeType' => array(
				'rule' => array('mimeType', array('image/gif', 'image/png', 'image/jpg', 'image/jpeg')),
				'message' => 'Envie imagens no formato correto(gif, jpg, and jpeg)',
				'allowEmpty' => true,
			),
			'fileSize' => array(
				'rule' => array('fileSize', '<=', '5MB'),
				'message' => 'Imagem menor do que 5MB.',
				'allowEmpty' => true,
			),
			'processImageUpload' => array(
				'rule' => 'processImageUpload',
				'message' => 'Não foi possível processar a imagem.',
				'allowEmpty' => true,
			),
		),
	);

	public function processImageUpload($check = array()) {
		if(!is_uploaded_file($check['path']['tmp_name'])) return false;
		if(!move_uploaded_file($check['path']['tmp_name'], WWW_ROOT . 'img' . DS . 'uploads' . DS . $check['path']['name'])) return false;
		$this->data[$this->alias]['path'] = 'uploads' . DS . $check['path']['name'];
		return true;
	}
	// End processImageUpload

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Albun' => array(
			'className' => 'Albun',
			'foreignKey' => 'albun_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
