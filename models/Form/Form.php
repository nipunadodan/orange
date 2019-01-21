<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/26/2018
 * Time: 12:54 PM
 */

namespace Form;


class Form{
    static public $fillable = [
        "name" => "user-add",
        "items"=>[
            ["first_name", "text", "First name", ""],
            ["last_name", "text", "Last name", ""],
            ["username", "text", "User name", ""],
            ["password", "password", "Password", ""],
            ["level", "select", "Level", [
                    ["10", "Super Administrator"],
                    ["5", "Administrator"],
                    ["1", "user"]
                ]
            ],
            ["bio", "textarea", "Biography", ""]
        ]
    ];

    public function __construct($fillable){
        self::$fillable = $fillable;
    }

    public static function formGen($fillable){
        echo '<form class="o1 roo-form" name="'.$fillable['name'].'">';
        foreach($fillable['items'] as $item){
            if($item[1] == 'select'){
                echo '<div class="input-group">';
                echo '<label for="'.$item[0].'">'.$item[2].'</label>';
                echo '<select name="' . $item[0] . '" id="' . $item[0] . '">';
                foreach($item[3] as $option){
                    echo '<option value="'.$option[0].'">'.$option[1].'</option>';
                }
                echo '</select>';
                echo '</div>';
            }elseif($item[1] == 'textarea'){
                echo '<div class="input-group">';
                echo '<label for="'.$item[0].'">'.$item[2].'</label>';
                echo '<textarea name="' . $item[0] . '" placeholder="' . $item['2'].'" id="' . $item[0] . '" >'.$item[3].'</textarea>';
                echo '</div>';
            }elseif($item[1] == 'button'){

            }elseif($item[1] == 'datalist'){
                echo '<div class="input-group">';
                echo '<label for="'.$item[0].'">'.$item[2].'</label>';
                echo '<datalist name="' . $item[0] . '" id="' . $item[0] . '">';
                foreach($item[3] as $option){
                    echo '<option value="'.$option[0].'">'.$option[1].'</option>';
                }
                echo '</datalist>';
                echo '</div>';
            }elseif($item[1] == 'submit'){
                echo '<div class="input-group">';
                echo '<input name="' . $item[0] . '" type="' . $item[1] . '" value="'.$item[3].'" id="' . $item[0] . '" />';
                echo '</div>';
            }else{
                echo '<div class="input-group">';
                echo '<label for="'.$item[0].'">'.$item[2].'</label>';
                echo '<input name="' . $item[0] . '" type="' . $item[1] . '" placeholder="' . $item['2'].'" value="'.$item[3].'" id="' . $item[0] . '" />';
                echo '</div>';
            }
        }
        echo '</form>';
    }
}