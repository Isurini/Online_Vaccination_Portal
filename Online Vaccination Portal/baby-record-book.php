<?php
session_start();
require_once 'connection.php';

if (isset($_GET['id'])) {
    $baby_id = $_GET['id'];
}
    



$stmt = $conn->prepare("SELECT * FROM babyprofile WHERE id = ?");
$stmt->bind_param("i", $baby_id);
$stmt->execute();
$babyResult = $stmt->get_result();
$baby = $babyResult->fetch_assoc();

$stmt = $conn->prepare("SELECT * FROM vaccinations WHERE baby_id = ? ORDER BY date DESC");
$stmt->bind_param("i", $baby_id);
$stmt->execute();
$vaccinationResult = $stmt->get_result();
$vaccinations = $vaccinationResult->fetch_all(MYSQLI_ASSOC);


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_vaccine'])) {
    $date = $_POST['date'];
    $vaccineName = $_POST['vaccine_name'];
    $dose = $_POST['dose'];

    $stmt = $conn->prepare("INSERT INTO vaccinations (baby_id, date, vaccine_name, NumberOfDose) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("issd", $baby_id, $date, $vaccineName, $dose);
    $stmt->execute();
    header("Location: baby-record-book.php?id=" . $baby_id);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_vaccine'])) {
    $vaccineId = $_POST['vaccine_id'];
    $date = $_POST['date'];
    $vaccineName = $_POST['vaccine_name'];
    $dose = $_POST['dose'];

    $stmt = $conn->prepare("UPDATE vaccinations SET date = ?, Vvaccine_name = ?, NumberOfDose = ? WHERE id = ?");
    $stmt->bind_param("ssdi", $date, $vaccineName, $dose, $vaccineId);
    $stmt->execute();
    header("Location: baby-record-book.php?id=" . $baby_id);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_vaccine'])) {
    $vaccineId = $_POST['Vaccine_ID'];

    $stmt = $conn->prepare("DELETE FROM vaccinations WHERE id = ?");
    $stmt->bind_param("i", $vaccineId);
    $stmt->execute();
    header("Location: baby-record-book.php?baby_id=" . $babyId);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Record Book - Child Shield</title>
    <link rel="stylesheet" href="css/baby-record-book.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/20f08145b4.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
<?php include 'header.php';
 ?>
    </header>


    <main>
       
        <section class="vaccination-records">
            <h2>Vaccination Records</h2>
            <button id="addVaccineBtn" class="btn"><i class="fas fa-plus"></i> Add Vaccine</button>

            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Vaccine Name</th>
                        <th>Dose (mg)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($vaccinations as $vaccine): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($vaccine['date']); ?></td>
                            <td><?php echo htmlspecialchars($vaccine['vaccine_name']); ?></td>
                            <td><?php echo htmlspecialchars($vaccine['NumberOfDose']); ?></td>
                            <td>
                                <button class="update-btn" 
                                        data-id="<?php echo $vaccine['Vaccine_ID']; ?>"
                                        data-date="<?php echo htmlspecialchars($vaccine['date']); ?>"
                                        data-name="<?php echo htmlspecialchars($vaccine['vaccine_name']); ?>"
                                        data-dose="<?php echo htmlspecialchars($vaccine['NumberOfDose']); ?>">
                                    Update </button>
                                
                                <form method="post" action="baby-record-book.php?baby_id=<?php echo $babyId; ?>">
                                    <input type="hidden" name="Vaccine_ID" value="<?php echo $vaccine['baby_id']; ?>">
                                    <button type="submit" name="delete_vaccine" class="btn">DELETE</button>
                                </form>

                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>

    <div id="addVaccineModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Add Vaccine</h2>
        <form action="baby-record-book.php?id=<?php echo $baby_id; ?>" method="post">
            <input type="date" name="date" required>
            <input type="text" name="vaccine_name" placeholder="Vaccine Name" required>
            <input type="number" name="dose" step="0.01" placeholder="Dose (mg)" required>
            <button type="submit" name="add_vaccine" class="btn">Add Vaccine</button>
        </form>
    </div>
</div>

    <div id="updateVaccineModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Update Vaccine</h2>
            <form action="baby-record-book.php?baby_id=<?php echo $baby_Id; ?>" method="post">
                <input type="hidden" name="Vaccine_ID" id="update_vaccine_id">
                <input type="date" name="date" id="update_date" required>
                <input type="text" name="vaccine_name" id="update_vaccine_name" placeholder="vaccine_name" required>
                <input type="number" name="NumberOfDose" id="update_dose" step="0.01" placeholder="Dose (mg)" required>
                <button type="submit" name="update_vaccine" class="btn">Update Vaccine</button>
            </form>
        </div>
    </div>

 
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addVaccineBtn = document.getElementById('addVaccineBtn');
            const addVaccineModal = document.getElementById('addVaccineModal');
            const updateVaccineModal = document.getElementById('updateVaccineModal');
            const closeBtns = document.getElementsByClassName('close');

            addVaccineBtn.onclick = function() {
                addVaccineModal.style.display = 'block';
            }

            for (let closeBtn of closeBtns) {
                closeBtn.onclick = function() {
                    addVaccineModal.style.display = 'none';
                    updateVaccineModal.style.display = 'none';
                }
            }

            window.onclick = function(event) {
                if (event.target == addVaccineModal) {
                    addVaccineModal.style.display = 'none';
                }
                if (event.target == updateVaccineModal) {
                    updateVaccineModal.style.display = 'none';
                }
            }

            const updateBtns = document.getElementsByClassName('update-btn');
            for (let btn of updateBtns) {
                btn.onclick = function() {
                    const vaccineId = this.getAttribute('data-id');
                    const date = this.getAttribute('data-date');
                    const name = this.getAttribute('data-name');
                    const dose = this.getAttribute('data-dose');

                    document.getElementById('update_vaccine_id').value = vaccineId;
                    document.getElementById('update_date').value = date;
                    document.getElementById('update_vaccine_name').value = name;
                    document.getElementById('update_dose').value = dose;

                    updateVaccineModal.style.display = 'block';
                }
            }
        });
        
    </script>
    <?php include 'footer.php';
 ?>
</body>
</html>