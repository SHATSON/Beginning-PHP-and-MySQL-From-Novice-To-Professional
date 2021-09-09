<? 
interface iPillage
{
    function emptyBankAccount();
    function burnDocuments();
}

class Executive extends Employee implements iPillage
{
    private $totalStockOptions;
    function emptyBankAccount()
    {
        echo "Call CFO and ask to transfer funds to Swiss bank account.";
    }
    function burnDocuments()
    {
        echo "Torch the office suite.";
    }
}

class Assistant extends Employee implements iPillage
{
    function takeMemo() {
        echo "Taking memo...";
    }
    function emptyBankAccount()
    {
        echo "Go on shopping spree with office credit card.";
    }

    function burnDocuments()
    {
        echo "Start small fire in the trash can.";
    }
}
?>