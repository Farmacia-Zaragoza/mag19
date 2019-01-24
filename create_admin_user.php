<?php
    define( 'USERNAME', 'mohit' );
    define( 'PASSWORD', 'mohit123' );
    define( 'FIRSTNAME', 'Mohit' );
    define( 'LASTNAME', 'Tyagi' );
    define( 'EMAIL', 'mohitime2007@gmail.com' );
    include_once( 'app/Mage.php' );
    Mage::app( 'admin' );
    try {
        $adminUserModel = Mage::getModel( 'admin/user' );
        $adminUserModel->setUsername( USERNAME )
            ->setFirstname( FIRSTNAME )
            ->setLastname( LASTNAME )
            ->setEmail( EMAIL )
            ->setNewPassword( PASSWORD )
            ->setPasswordConfirmation( PASSWORD )
            ->setIsActive( true )
            ->save();
        $adminUserModel->setRoleIds( array( 1 ) )
            ->setRoleUserId( $adminUserModel->getUserId() )
            ->saveRelations();
        echo 'Admin User created. ' . EOL;
    } catch( Exception $e ) {
        echo $e->getMessage();
    }
?>
