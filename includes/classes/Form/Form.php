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
        "form" => ["name" =>"user-add", "method" => "post", "class" => "o1 vf-form"],
        "items"=>[
            ["text", "first_name", "First name", ""],
            ["text", "last_name", "Last name", ""],
            ["text", "username", "User name", ""],
            ["password", "password", "Password", ""],
            ["select", "level", "Level", [
                ["10", "Super Administrator"],
                ["5", "Administrator"],
                ["1", "user"]
            ]
            ],
            ["textarea", "bio", "Biography", ""],
            ["submit", "form-submit", "Send"]
        ]
    ];

    public function __construct($fillable){
        self::$fillable = $fillable;
    }

    public static function formGen($fillable){
        echo '<form class="'.$fillable['form']['class'].'" name="'.$fillable['form']['name'].'" method="'.$fillable['form']['method'].'">';
        foreach($fillable['items'] as $item){
            if($item[0] == 'select'){
                echo '<div class="input-group">';
                echo '<label for="'.$item[0].'">'.$item[2].'</label>';
                echo '<select name="' . $item[0] . '" id="' . $item[0] . '">';
                foreach($item[3] as $option){
                    echo '<option value="'.$option[0].'">'.$option[1].'</option>';
                }
                echo '</select>';
                echo '</div>';
            }elseif($item[0] == 'textarea'){
                echo '<div class="input-group">';
                echo '<label for="'.$item[0].'">'.$item[2].'</label>';
                echo '<textarea name="' . $item[0] . '" placeholder="' . $item['2'].'" id="' . $item[0] . '" >'.$item[3].'</textarea>';
                echo '</div>';
            }elseif($item[0] == 'button'){

            }elseif($item[0] == 'datalist'){
                echo '<div class="input-group">';
                echo '<label for="'.$item[0].'">'.$item[2].'</label>';
                echo '<datalist name="' . $item[0] . '" id="' . $item[0] . '">';
                foreach($item[3] as $option){
                    echo '<option value="'.$option[0].'">'.$option[1].'</option>';
                }
                echo '</datalist>';
                echo '</div>';
            }elseif($item[0] == 'submit'){
                echo '<div class="input-group">';
                echo '<label></label>';
                echo '<input name="' . $item[1] . '" type="' . $item[0] . '" value="'.$item[2].'" id="' . $item[1] . '" />';
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
