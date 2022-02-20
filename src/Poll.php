<?php 


class Poll {

    public static function sendPoll($pdo, $datas) {
        $req = $pdo->prepare("INSERT INTO poll(ip,colors,animations,texts,toadd) VALUES(?,?,?,?,?)");
        $req->execute($datas);
        return true;
    }
}