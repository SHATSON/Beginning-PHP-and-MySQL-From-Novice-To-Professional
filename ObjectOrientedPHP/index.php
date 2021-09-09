<?

trait Log {
    function writeLog($message) {
        file_put_contents("log.txt", $message . "\n", FILE_APPEND);
    }
}
class A {
    function __construct() {
        $this->WriteLog("Constructor A called");
    }
    use Log;
}
class B {
    function __construct() {
        $this->WriteLog("Constructor B called");
    }
    use Log;
}

$b = new B();
//echo $b
?>