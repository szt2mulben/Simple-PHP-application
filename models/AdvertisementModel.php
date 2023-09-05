<? 
class AdvertisementModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function getAdvertisementsWithUsers() {
        try {
            $query = "SELECT a.id, a.title, u.name AS username 
                      FROM advertisements AS a
                      INNER JOIN users AS u ON a.userid = u.id";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }
}