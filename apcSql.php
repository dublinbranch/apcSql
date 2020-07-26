<?php
require_once __DIR__ . '/../phpMysql/dbwrapper.php';
function apcCached(string $sql, DBWrapper $db, int $ttl = 60)
{
    //we do not store boolean never, so this is ok, at most we have NULL...
    $res = apcu_fetch($sql);
    if ($res !== false) {
        return $res;
    }
    $res = $db->getLineSS($sql);
    apcu_store($sql,$res,$ttl);
    return $res;
}