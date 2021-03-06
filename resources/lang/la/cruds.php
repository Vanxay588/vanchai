<?php

return [
    'userManagement' => [
        'title'          => 'ການຈັດການຜູ້ໃຊ້',
        'title_singular' => 'ການຈັດການຜູ້ໃຊ້',
    ],
    'permission' => [
        'title'          => 'ການກຳນົດສິດ',
        'title_singular' => 'ການກຳນົດສິດ',
        'fields'         => [
            'id'                => 'ລຳດັບ',
            'id_helper'         => ' ',
            'title'             => 'ຫົວຂໍ້',
            'title_helper'      => ' ',
            'created_at'        => 'ສ້າງເມື່ອ',
            'created_at_helper' => ' ',
            'updated_at'        => 'ປັບປຸງເມື່ອ',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'ລົບເມື່ອ',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'ບົດບາດ',
        'title_singular' => 'ບົດບາດ',
        'fields'         => [
            'id'                 => 'ລຳດັບ',
            'id_helper'          => ' ',
            'title'              => 'ຫົວຂໍ້',
            'title_helper'       => ' ',
            'permissions'        => 'ການກຳນົດສິດ',
            'permissions_helper' => ' ',
            'created_at'         => 'ສ້າງເມື່ອ',
            'created_at_helper'  => ' ',
            'updated_at'         => 'ປັບປຸງເມື່ອ',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'ລົບເມື່ອ',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'ຜູ້ໃຊ້',
        'title_singular' => 'ຜູ້ໃຊ້',
        'fields'         => [
            'id'                       => 'ລຳດັບ',
            'id_helper'                => ' ',
            'name'                     => 'ຊື່',
            'name_helper'              => ' ',
            'email'                    => 'ອີເມລ',
            'email_helper'             => ' ',
            'email_verified_at'        => 'ກວດສອບອີເມລເມື່ອ',
            'email_verified_at_helper' => ' ',
            'password'                 => 'ລະຫັດຜ່ານ',
            'password_helper'          => ' ',
            'roles'                    => 'ບົດບາດ',
            'roles_helper'             => ' ',
            'remember_token'           => 'ຈຳໂທເຄນ',
            'remember_token_helper'    => ' ',
            'created_at'               => 'ສ້າງເມື່ອ',
            'created_at_helper'        => ' ',
            'updated_at'               => 'ປັບປຸງເມື່ອ',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'ລົບເມື່ອ',
            'deleted_at_helper'        => ' ',
            'surname'                  => 'ນາມສະກຸນ',
            'surname_helper'           => ' ',
            'gender'                   => 'ເພດ',
            'gender_helper'            => ' ',
            'date_of_birth'            => 'ວັນເດືອນປີເກີດ',
            'date_of_birth_helper'     => ' ',
        ],
    ],
    'home' => [
        'title'          => 'ໜ້າຫຼັກ',
        'title_singular' => 'ໜ້າຫຼັກ',
    ],
    'annoucement' => [
        'title'          => 'ແຈ້ງການ',
        'title_singular' => 'ແຈ້ງການ',
        'fields'         => [
            'id'                 => 'ລຳດັບ',
            'id_helper'          => ' ',
            'annoucement'        => 'ແຈ້ງການ',
            'annoucement_helper' => ' ',
            'name'               => 'ຊື່',
            'name_helper'        => ' ',
            'number'             => 'ເລກທີ',
            'number_helper'      => ' ',
            'short_name'         => 'ຕົວຫຍໍ້',
            'short_name_helper'  => ' ',
            'allow_date'         => 'ລົງວັນທີ',
            'allow_date_helper'  => ' ',
            'description'        => 'ຄຳອະທິບາຍ',
            'description_helper' => ' ',
            'created_at'         => 'ສ້າງເມື່ອ',
            'created_at_helper'  => ' ',
            'updated_at'         => 'ປັບປຸງເມື່ອ',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'ລົບເມື່ອ',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'policyManagement' => [
        'title'          => 'ການຈັດການນິຕິກຳ',
        'title_singular' => 'ການຈັດການນິຕິກຳ',
    ],
    'policyCategory' => [
        'title'          => 'ປະເພດ',
        'title_singular' => 'ປະເພດ',
        'fields'         => [
            'id'                => 'ລຳດັບ',
            'id_helper'         => ' ',
            'categories'        => 'ປະເພດ',
            'categories_helper' => ' ',
            'created_at'        => 'ສ້າງເມື່ອ',
            'created_at_helper' => ' ',
            'updated_at'        => 'ປັບປຸງເມື່ອ',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'ລົບເມື່ອ',
            'deleted_at_helper' => ' ',
        ],
    ],
    'policy' => [
        'title'          => 'ນິຕິກຳ',
        'title_singular' => 'ນິຕິກຳ',
        'fields'         => [
            'id'                 => 'ລຳດັບ',
            'id_helper'          => ' ',
            'policy'             => 'ນິຕິກຳ',
            'policy_helper'      => ' ',
            'name'               => 'ຊື່',
            'name_helper'        => ' ',
            'categories'         => 'ປະເພດ',
            'categories_helper'  => ' ',
            'level_no'           => 'ສະບັບເລກທີ',
            'level_no_helper'    => ' ',
            'allow_date'         => 'ລົງວັນທີ',
            'allow_date_helper'  => ' ',
            'description'        => 'ຄຳອະທິບາຍ',
            'description_helper' => ' ',
            'created_at'         => 'ສ້າງເມື່ອ',
            'created_at_helper'  => ' ',
            'updated_at'         => 'ປັບປຸງເມື່ອ',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'ລົບເມື່ອ',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'downloadManagement' => [
        'title'          => 'ການຈັດການດາວໂຫລດ',
        'title_singular' => 'ການຈັດການດາວໂຫລດ',
    ],
    'downloadCategory' => [
        'title'          => 'ປະເພດ',
        'title_singular' => 'ປະເພດ',
        'fields'         => [
            'id'                => 'ລຳດັບ',
            'id_helper'         => ' ',
            'categories'        => 'ປະເພດ',
            'categories_helper' => ' ',
            'created_at'        => 'ສ້າງເມື່ອ',
            'created_at_helper' => ' ',
            'updated_at'        => 'ປັບປຸງເມື່ອ',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'ລົບເມື່ອ',
            'deleted_at_helper' => ' ',
        ],
    ],
    'download' => [
        'title'          => 'ດາວໂຫລດ',
        'title_singular' => 'ດາວໂຫລດ',
        'fields'         => [
            'id'                => 'ລຳດັບ',
            'id_helper'         => ' ',
            'download'          => 'ດາວໂຫລດ',
            'download_helper'   => ' ',
            'name'              => 'ຊື່',
            'name_helper'       => ' ',
            'categories'        => 'ປະເພດ',
            'categories_helper' => ' ',
            'photo'             => 'ຮູບພາບ',
            'photo_helper'      => ' ',
            'created_at'        => 'ສ້າງເມື່ອ',
            'created_at_helper' => ' ',
            'updated_at'        => 'ປັບປຸງເມື່ອ',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'ລົບເມື່ອ',
            'deleted_at_helper' => ' ',
        ],
    ],
    'examinationResult' => [
        'title'          => 'ຜົນສອບເສັງ',
        'title_singular' => 'ຜົນສອບເສັງ',
        'fields'         => [
            'id'                        => 'ລຳດັບ',
            'id_helper'                 => ' ',
            'academic_years'            => 'ສົກຮຽນ',
            'academic_years_helper'     => ' ',
            'examination_result'        => 'ຜົນສອບເສັງ',
            'examination_result_helper' => ' ',
            'name'                      => 'ລາຍລະອຽດ',
            'name_helper'               => ' ',
            'created_at'                => 'ສ້າງເມື່ອ',
            'created_at_helper'         => ' ',
            'updated_at'                => 'ປັບປຸງເມື່ອ',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'ລົບເມື່ອ',
            'deleted_at_helper'         => ' ',
        ],
    ],
    'statisticManagement' => [
        'title'          => 'ການຈັດການສະຖິຕິ',
        'title_singular' => 'ການຈັດການສະຖິຕິ',
    ],
    'statisticCategory' => [
        'title'          => 'ປະເພດ',
        'title_singular' => 'ປະເພດ',
        'fields'         => [
            'id'                => 'ລຳດັບ',
            'id_helper'         => ' ',
            'categories'        => 'ປະເພດ',
            'categories_helper' => ' ',
            'created_at'        => 'ສ້າງເມື່ອ',
            'created_at_helper' => ' ',
            'updated_at'        => 'ປັບປຸງເມື່ອ',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'ລົບເມື່ອ',
            'deleted_at_helper' => ' ',
        ],
    ],
    'statistic' => [
        'title'          => 'ສະຖິຕິ',
        'title_singular' => 'ສະຖິຕິ',
        'fields'         => [
            'id'                => 'ລຳດັບ',
            'id_helper'         => ' ',
            'statistic'         => 'ສະຖິຕິ',
            'statistic_helper'  => ' ',
            'name'              => 'ຊື່',
            'name_helper'       => ' ',
            'categories'        => 'ປະເພດ',
            'categories_helper' => ' ',
            'created_at'        => 'ສ້າງເມື່ອ',
            'created_at_helper' => ' ',
            'updated_at'        => 'ປັບປຸງເມື່ອ',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'ລົບເມື່ອ',
            'deleted_at_helper' => ' ',
        ],
    ],
    'aboutUs' => [
        'title'                      => 'ກ່ຽວກັບພວກເຮົາ',
        'title_singular'             => 'ກ່ຽວກັບພວກເຮົາ',
        'structure'                  =>  'ໂຄງປະກອບການຈັດຕັ້ງ',
        'content1'                   => 'ຫ້ອງການກຳມາທິການສຶກສາສົງແຂວງສະຫວັນນະເຂດ ຂຽນຕົວຫຍໍ້ວ່າ “ຫສຂ.ສຂ” ເປັນກົງຈັກບໍລິຫານທີ່ຂື້ນກັບ ພະແນກສຶກສາທິການ ແລະກິລາແຂວງ ແລະ ອົງການພຸດທະສາສະໜາສັມພັນລາວ ເປັນເສນາທິການໃຫ້ແກ່ກຳມາທິການສຶກສາສົງແຂວງ ເຊິ່ງມີພາລະບົດບາດໃນການຄຸ້ມຄອງ, ສົ່ງເສີມ, ຕິດຕາມ, ກວດກາ ແລະ ປະເມີນຜົນການສຶກສາສົງໃຫ້ບັນລຸຕາມຄາດໝາຍທີ່ກຳນົດໄວ້.',
        'content2'                   => 'ໂຄງປະກອບບຸກຄະລາກອນ ຂອງຫ້ອງການກຳມາທິການສຶກສາສົງແຂວງສະຫວັນນະເຂດ',
        'position1'                  =>'1. ຫົວໜ້າຫ້ອງການກຳມາທິການສຶກສາສົງແຂວງ		01 ຕຳແໜ່ງ',
        'position2'                  =>'2. ຮອງຫົວໜ້າຫ້ອງການກຳມາທິການສຶກສາສົງແຂວງ	01 ຕຳແໜ່ງ',
        'position3'                  =>'3. ພະນັກງານວິຊາການ					       03 ຕຳແໜ່ງ',
        'content3'                   =>'(ປັດຈຸບັນພາຍໃນຫ້ອງການກຳມາທິການສຶກສາສົງແຂວງສະຫວັນນະເຂດ ມີພຽງແຕ່ 02 ອົງ/ທ່ານ ຄື: ຫົວໜ້າຫ້ອງການເຊິ່ງເປັນພຣະ ແລະ ຮອງຫົວໜ້າຫ້ອງການເປັນຄະລືຫັດ ຍັງບໍ່ທັນມີພະນັກງານວິຊາການ)',
             
             
        
        
    ],
    'contactUs' => [
        'title'                      => 'ຕິດຕໍ່ພວກເຮົາ',
        'title_singular'             => 'ຕິດຕໍ່ພວກເຮົາ',
        'full_location'              => 'ວັດໄຊຍະພູມມາຣາມ, ນະຄອນໄກສອນພົມວິຫານ, ແຂວງສະຫວັນນະເຂດ',
        'office_location'            =>  'ທີ່ຕັ້ງຂອງໜ່ວຍງານ',
        'phone'                      =>  '02029296649',
        'whatsapp'                   =>  '02029296649',
   
    ],
];