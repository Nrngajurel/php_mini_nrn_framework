<?php

namespace Nrngajurel\Sl;

class Application
{
    public static Application $app;
    public Database $db;
    public Session $session;
    public function __construct()
    {
        self::$app = $this;
        $this->db = new Database();
        $this->session = new Session();
    }

}