<?php

namespace App\Http;

class Flash {

    private function sessionFlash($title, $message, $key = 'flash', $type = 'info'){
        session()->flash($key, [
            'title' => $title,
            'message' => $message,
            'type' => $type
        ]);
    }

    public function info($title, $message){
        return $this->sessionFlash($title, $message);
    }

    public function success($title, $message){
        return $this->sessionFlash($title, $message, 'success');
    }

    public function error($title, $message){
        return $this->sessionFlash($title, $message, 'error');
    }

    public function overlay($title, $message, $type = 'success'){
        return $this->sessionFlash($title, $message, 'flash_overlay', $type);
    }


}
