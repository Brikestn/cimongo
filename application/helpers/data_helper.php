<?php
function getCategoriesNameFromId($id){
    $CI = &get_instance();
    $CI->load->model('categories_model');
    $condition = array(
        '_id' => $CI->mongo_db->create_document_id($id)
    );
    $result = $CI->categories_model->findOne($condition);
    return $result['categories_name'];
}