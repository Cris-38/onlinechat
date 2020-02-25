<?php

class Chat extends Core {

    public function fetchMessages() {
        $this->query("SELECT chatmessage . message, users . user_name, users . user_id
          FROM users
          JOIN chatmessage
          ON chatmessage . user_id = users . user_id
          ORDER BY timestamp
          DESC
          ");
        return $this->rows();
    }

    public function throwMessage($user_id, $message) {
        $this->query("INSERT INTO chatmessage (user_id, message, timestamp)
        VALUES('" . (int) $user_id . "', '" . $this->db->escape_string(htmlentities($message)) . "', UNIX_TIMESTAMP())");
    }

}
?>
