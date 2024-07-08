<?php
require_once("connect.php");
if (!isset($_SESSION['admin'])) {
    header("location:login.php");
    exit();
}
include_once("header.php");
?>
<!-- Modal toggle -->
<!-- <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
</button> -->

<!-- Main modal -->
<!-- <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full"> -->
<!-- Modal content -->
<!-- <div class="relative bg-white rounded-lg shadow dark:bg-gray-700"> -->
<?php
$movies_records  = mysqli_query($conn, "SELECT * FROM movies");
while ($movies_row = mysqli_fetch_assoc($movies_records)) {
?>
    <!-- <div class="grid grid-flow-col gap-2">
        <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="<?= $movies_row['image_location'] ?>" alt="<?= $movies_row['title'] ?>">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </div>
    </div> -->
<?php
}
?>
<!-- 
        </div>
    </div> -->
</div>


<?php include_once("footer.php"); ?>