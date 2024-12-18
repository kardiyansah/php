<?php

class Flasher {
    public static function setFlash($mess, $action, $type)
    {
        $_SESSION['flash'] = [
            'mess' => $mess,
            'action' => $action,
            'type' => $type
        ];
    }

    public static function flash()
    {
        if ( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert">
                    Data Buku <strong>' . $_SESSION['flash']['mess'] . '</strong> ' . $_SESSION['flash']['action'] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';

            unset($_SESSION['flash']);
        }
    }

}