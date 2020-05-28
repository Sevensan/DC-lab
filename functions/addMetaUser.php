

<?php 



function userMetaBirthdayForm(WP_User $user) {
    ?>
    <h2>Méta user ajoutées</h2>
        <table class="form-table">
            <tr>
                <th><label for="user_birthday">Date anniversaire</label></th>
                <td>
                    <input
                        type="date"
                        value="<?php echo esc_attr(get_user_meta($user->ID, 'birthday', true)); ?>"
                        name="user_birthday"
                        id="user_birthday"
                    >
                    <span class="description">Renseigner votre date d'anniversaire</span>
                </td>
            </tr>
        </table>
    <?php
    }
    add_action('show_user_profile', 'userMetaBirthdayForm'); // editing your own profile
    add_action('edit_user_profile', 'userMetaBirthdayForm'); // editing another user
    add_action('user_new_form', 'userMetaBirthdayForm'); // creating a new user
	 
	

    function userMetaBirthdaySave($userId) {
        if (!current_user_can('edit_user', $userId)) {
            return;
        }
     
        update_user_meta($userId, 'birthday', $_REQUEST['user_birthday']);
    }
    add_action('personal_options_update', 'userMetaBirthdaySave');
    add_action('edit_user_profile_update', 'userMetaBirthdaySave');
    add_action('user_register', 'userMetaBirthdaySave');



  /*   ------------------- LE TELEPHONE ------------------- */ 

    
    function userMetaTelForm(WP_User $user){
        ?>
        
        <table class="form-table">
            <tr>
                <th><label for="user_tel">Numéro de téléphone</label></th>
                <td>
                    <input type="text"
                    value="<?php echo esc_attr(get_user_meta($user->ID, 'telephone', true)); ?>"
                    name="user_telephone"
                    id="user_telephone"
                    >
                    <span class="description">Renseigner votre numéro de téléphone</span>
                </td>
            </tr>
        </table>
        <?php
    }
    add_action('show_user_profile', 'userMetaTelForm'); // editing your own profile
    add_action('edit_user_profile', 'userMetaTelForm'); // editing another user
    add_action('user_new_form', 'userMetaTelForm'); // creating a new user


    function userMetaTelSave($userId) {
        if (!current_user_can('edit_user', $userId)) {
            return;
        }
     
        update_user_meta($userId, 'telephone', $_REQUEST['user_telephone']);
    }
    add_action('personal_options_update', 'userMetaTelSave');
    add_action('edit_user_profile_update', 'userMetaTelSave');
    add_action('user_register', 'userMetaTelSave');

     /*   ------------------- LE SEXE ------------------- */ 

     function userMetaSexeForm(WP_User $user){
        ?>
        
        <table class="form-table">
            <tr>
                <th><label for="user_sexe">Sexe</label></th>
                <td>

                <select class="form-control"
                        name="user_sexe"
                        id="user_sexe"    
                 >
                    <option name="user_sexe" value="Femme">Femme</option>
                    <option name="user_sexe" value="Homme">Homme</option>
                </select>


                    <span class="description">Renseigner votre sexe</span>
                </td>
            </tr>
        </table>
        <?php
    }
    add_action('show_user_profile', 'userMetaSexeForm'); // editing your own profile
    add_action('edit_user_profile', 'userMetaSexeForm'); // editing another user
    add_action('user_new_form', 'userMetaSexeForm'); // creating a new user


    function userMetaSexeSave($userId) {
        if (!current_user_can('edit_user', $userId)) {
            return;
        }
     
        update_user_meta($userId, 'sexe', $_REQUEST['user_sexe']);
    }
    add_action('personal_options_update', 'userMetaSexeSave');
    add_action('edit_user_profile_update', 'userMetaSexeSave');
    add_action('user_register', 'userMetaSexeSave');




	
    
    ?>
	
