<?php




if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_vaccine'])) {
    $date = $_POST['date'];
    $vaccineName = $_POST['vaccine_name'];
    $dose = $_POST['dose'];

    $stmt = $conn->prepare("INSERT INTO vaccinations (baby_id, date, VaccineName, NumberOfDose) VALUES (?, ?, ?, ?)");
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

    $stmt = $conn->prepare("UPDATE vaccinations SET date = ?, VaccineName = ?, NumberOfDose = ? WHERE id = ?");
    $stmt->bind_param("ssdi", $date, $vaccineName, $dose, $vaccineId);
    $stmt->execute();
    header("Location: baby-record-book.php?id=" . $baby_id);
    exit();
}

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
