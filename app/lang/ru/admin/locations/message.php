<?php

return array(

    'does_not_exist' => 'Статус актива не существует.',
    'assoc_users'	 => 'Данный статус связан с одним или несколькими активами, и не может быть удален. Удалите либо измените связанные активы. ',
    'assoc_assets'	 => 'This location is currently associated with at least one asset and cannot be deleted. Please update your assets to no longer reference this location and try again. ',
    'assoc_child_loc'	 => 'This location is currently the parent of at least one child location and cannot be deleted. Please update your locations to no longer reference this location and try again. ',


    'create' => array(
        'error'   => 'Статус актива не был создан, попробуйте еще раз.',
        'success' => 'Статус актива успешно создан.'
    ),

    'update' => array(
        'error'   => 'Статус актива не был обновлен, попробуйте еще раз',
        'success' => 'Статус актива успешно обновлен.'
    ),

    'delete' => array(
        'confirm'   	=> 'Вы уверено, что хотите удалить этот статус?',
        'error'   => 'При удалении статуса актива произошла ошибка. Попробуйте еще раз.',
        'success' => 'Статус актива успешно удален.'
    )

);
