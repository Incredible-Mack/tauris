<?php 
include "inc-header.php"; 
include "inc-contract-asset.php"; //fetch data from the contract details 
?>




<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">

<!--begin::Container-->
<div id="kt_content_container" class="container-xxl">





<!--begin::Toolbar-->
<div class="d-flex flex-wrap flex-stack my-5">
<!--begin::Heading-->
<h2 class="fs-2 fw-bold mt-5"> Contract <?php echo $response[0]['contract_id']; ?> Details </h2>
<!--end::Heading-->
</div>
<!--end::Toolbar-->







<!--begin::Navbar-->
<div class="card mb-6">
<div class="card-body pt-9 pb-0">
<!--begin::Details-->
<div class="d-flex flex-wrap flex-sm-nowrap">
<!--begin: Pic-->
<div class="me-7 mb-4">
<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
<img src="<?php echo $domain ; ?>assets/media/svg/brand-logos/volicity-9.svg" alt="image" />
<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
</div>
</div>

<!--end::Pic-->
<!--begin::Info-->
<div class="flex-grow-1">
<!--begin::Title-->
<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
<!--begin::User-->
<div class="d-flex flex-column">
<!--begin::Name-->
<div class="d-flex align-items-center mb-2">
<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1"><?php echo $response[0]['owner']; ?></a>
</div>
<!--end::Name-->


<!--begin::Info-->
<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
<a class="d-flex align-items-center text-gray-800 text-hover-primary me-5 mb-2">Contract ID: <?php echo $response[0]['contract_id']; ?></a>
<a class="d-flex align-items-center text-gray-800 text-hover-primary me-5 mb-2">Contract Date: <?php echo convert_date($response[0]['contract_date']); ?></a>
<a class="d-flex align-items-center text-gray-800 text-hover-primary mb-2">Contract Status:  <?php echo $response[0]['status']; ?></a>
</div>
<!--end::Info-->
</div>
<!--end::User-->

</div>
<!--end::Title-->
<!--begin::Stats-->
<div class="d-flex flex-wrap flex-stack">

<!--begin::Wrapper-->
<div class="d-flex flex-column flex-grow-1 pe-8">
<!--begin::Stats-->
<div class="d-flex flex-wrap">

<div class="row p-0 mb-5 px-9 ps-0 pe-0">
<!--begin::Col-->
<div class="col">
<div class="border border-dashed border-gray-300 text-center min-w-150px rounded pt-4 pb-2 my-3  bg-light-primary ps-5 pe-5">
<span class="fs-lg-2 fs-2hx fw-bold d-block">BUDGET</span>
<div class="fs-lg-2hx fs-2hx fw-bolder" data-kt-countup="true" data-kt-countup-value="<?php echo $response[0]['budget']; ?>" data-kt-countup-prefix="$">0</div>
</div>
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col">
<div class="border border-dashed border-gray-300 text-center min-w-150px rounded pt-4 pb-2 my-3  bg-light-danger ps-5 pe-5">
<span class="fs-lg-2 fs-2hx fw-bold d-block"> SPENDING</span>
<div class="fs-lg-2hx fs-2hx fw-bolder" data-kt-countup="true" data-kt-countup-value="<?php echo $response[0]['budget_spent']; ?>" data-kt-countup-prefix="$">0</div>
</div>
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col">
<div class="border border-dashed border-gray-300 text-center min-w-175px rounded pt-4 pb-2 my-3  bg-light-success ps-5 pe-5">
<span class="fs-lg-2 fs-2hx fw-bold d-block">BALANCE</span>
<div class="fs-lg-2hx fs-2hx fw-bolder" data-kt-countup="true" data-kt-countup-value="<?php echo $response[0]['budget'] - $response[0]['budget_spent']; ?>" data-kt-countup-prefix="$">0</div>
</div>
</div>
<!--end::Col-->
</div>
</div>
<!--end::Stats-->
</div>
<!--end::Wrapper-->





<!--begin::Progress-->
<div class="d-flex align-items-center w-300px w-sm-300px flex-column mt-3 ps-10">
<div class="d-flex justify-content-between w-100 mt-auto mb-2">
<span class="fw-bold fs-4">Spending Progress</span>
<?php 
	$spendingProgress = ($response[0]['budget_spent'] / $response[0]['budget']) * 100;
    $roundedProgress = round($spendingProgress);
										?>
<span class="fw-bolder fs-4"><?php echo $roundedProgress; ?>%</span>
</div>
<div class="h-5px mx-3 w-100 bg-light mb-3">
<div class="bg-success rounded h-5px" role="progressbar" style="width: <?php echo $roundedProgress; ?>%;" aria-valuenow="<?php echo $roundedProgress; ?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<!--end::Progress-->
</div>
<!--end::Stats-->
</div>
<!--end::Info-->
</div>
<!--end::Details-->

</div>
</div>
<!--end::Navbar-->


<!--begin::Section-->
<div class="py-0">

<!--begin::Block-->
<div class="py-5">
<div class="rounded border p-1">
<div class="card shadow">
<div class="card-header card-header-stretch">
<h2 class="card-title">Contract Asset</h2>
<div class="card-toolbar">
<ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
<li class="nav-item">
<a class="nav-link text-active-primary pb-4 active text-black-400" data-bs-toggle="tab" href="#kt_tab_pane_7">
<span class="pe-3"> <i class="fa fa-university" aria-hidden="true"></i> </span> Disbursement</a>
</li>
<li class="nav-item">
<a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab" href="#kt_tab_pane_8" onclick="" id='getDataButton'>
<span class="pe-3"><i class="fa fa-folder-open" aria-hidden="true"></i> </span> Documents</a>
</li>
<li class="nav-item">
<a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab" href="#kt_tab_pane_9" id="getNotes">
<span class="pe-3"> <i class="fa fa-sticky-note" aria-hidden="true"></i>  </span> Notes</a>
</li>
</ul>
</div>
</div>
<div class="card-body">
<div class="tab-content" id="myTabContent">


<div class="tab-pane fade show active" id="kt_tab_pane_7" role="tabpanel">

<div id="kt_customer_view_statement_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
<div class="table-responsive">
<table id="kt_customer_view_statement_table_1" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-4 dataTable no-footer">
<!--begin::Table head-->
<thead class="border-bottom border-gray-200">
<!--begin::Table row-->
<tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
<th class="w-200px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_1" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending" style="width: 20%;">Reference</th>
<th class="w-400px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_1" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 40%;">Amount</th>
<th class="w-200px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_1" rowspan="1" colspan="1" aria-label="Details: activate to sort column ascending" style="width: 20%;">Mode</th>
<th class="w-200px sorting" tabindex="0" aria-controls="kt_customer_view_statement_table_1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 20%;">Date</th>
</tr>
<!--end::Table row-->
</thead>
<tbody>
<?php foreach($response as $value ) {?>
<tr class="odd">
<td> <a href="#" class="text-gray-600 text-hover-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invoice"><?php echo $value['reference'] ?></a> </td>
<td class=""><?php echo $value['amount'] ?></td>
<td><span class="badge badge-light-info"><?php echo $value['payment_mode'] ?></span></td>
<td data-order="2021-01-01T00:00:00+01:00"><?php echo convert_date($value['payment_date']) ?></td>
</tr>
<?php } ?>


</tbody>
<!--end::Table body-->
</table>

</div>

</div>

</div>


<div class="tab-pane fade" id="kt_tab_pane_8" role="tabpanel">

<div class="card card-flush">

<!--begin::Card body-->
<div class="card-body">

<!--begin::Table-->
<div id="kt_file_manager_list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

<div class="table-responsive">

<table id="kt_file_manager_list" data-kt-filemanager-table="files" class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
<!--begin::Table head-->
<thead>
<!--begin::Table row-->
<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
<th class="min-w-250px sorting_disabled" rowspan="1" colspan="1" style="width: 436.312px;">Name</th>
<th class="min-w-10px sorting_disabled" rowspan="1" colspan="1" style="width: 94.9531px;">Size</th>
<th class="min-w-125px sorting_disabled" rowspan="1" colspan="1" style="width: 279.234px;">Last Modified</th>
</tr>
<!--end::Table row-->
</thead>
<!--end::Table head-->
<!--begin::Table body-->
<tbody class="fw-bold text-gray-600" id='dataBody'>
</tbody>
<!--end::Table body-->
</table>
</div>



</div>
<!--end::Table-->
</div>
<!--end::Card body-->
</div>


</div>


<div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel">



<div class="card card-flush">

<!--begin::Card body-->
<div class="card-body">

<!--begin::Table-->
<div id="kt_file_manager_list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

<div class="table-responsive">

<table id="kt_file_manager_list" data-kt-filemanager-table="files" class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
<!--begin::Table head-->
<thead>
<!--begin::Table row-->
<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
<th class="min-w-100px" rowspan="1" colspan="1" style="width: 436.312px;">Title</th>
<th class="min-w-300px" rowspan="1" colspan="1" style="width: 94.9531px;">Details</th>
<th class="min-w-100px" rowspan="1" colspan="1" style="width: 279.234px;">Added By</th>
<th class="min-w-125px" rowspan="1" colspan="1" style="width: 279.234px;">Last Modified</th>
</tr>

</thead>

<tbody class="fw-bold text-gray-600" id='dataBodyNote'></tbody>

</table>
</div>

</div>

</div>

</div>




</div>


</div>
</div>
</div>
</div>
</div>
<!--end::Block-->

</div>
<!--end::Section-->


</div>
<!--end::Container-->
</div>
<!--end::Post-->
</div>
<!--end::Content-->

<script>
//     
function fetchDataAndPopulateTable() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '<?php echo $domain ?>/tauris_api/v2/api/contract_asset.php?data=document', true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            var records = JSON.parse(xhr.responseText);
            
            var tableBody = document.getElementById('dataBody');
            tableBody.innerHTML = '';
            
            for (var i = 0; i < records.length; i++) {
                var record = records[i];
                console.log(record)
               // var record = record.data; // Extracting the nested 'data' object
                console.log(record)
                var row = document.createElement('tr'); // Create a new table row
                row.classList.add(i % 2 === 0 ? 'even' : 'odd'); // Apply even/odd class

                // First cell with icon and link
                var cell1 = document.createElement('td');
                var iconSpan = document.createElement('span');
                iconSpan.className = 'svg-icon svg-icon-2x svg-icon-primary me-4';
                var icon = document.createElement('i');
                icon.className = 'fa fa-file fs-1 svg-icon svg-icon-excel';
                icon.setAttribute('aria-hidden', 'true');
                iconSpan.appendChild(icon);
                var link = document.createElement('a');
                link.href = '#';
                link.className = 'text-gray-800 text-hover-primary';

                link.textContent = record['name'];
                var div = document.createElement('div');
                div.className = 'd-flex align-items-center';
                div.appendChild(iconSpan);
                div.appendChild(link);
                cell1.appendChild(div);

                // Second cell
                var cell2 = document.createElement('td');
                cell2.textContent = record['size'];;

                // Third cell
                var cell3 = document.createElement('td');
                cell3.textContent = record['date_modified'];
                //record.date; // Assuming you have a 'date' property in record
                    
                row.appendChild(cell1);
                row.appendChild(cell2);
                row.appendChild(cell3);

                tableBody.appendChild(row); 
             }
        } else {
            console.error('Request failed. Status: ' + xhr.status);
        }
    };

    xhr.send();
}


function fetchDataNote() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '<?php echo $domain ?>/tauris_api/v2/api/contract_asset.php?data=notes', true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            var records = JSON.parse(xhr.responseText);
            
            var tableBody = document.getElementById('dataBodyNote');
            tableBody.innerHTML = '';
            
            for (var i = 0; i < records.length; i++) {
                var record = records[i];
                console.log(record)
               // var record = record.data; // Extracting the nested 'data' object
                console.log(record)
                var row = document.createElement('tr'); // Create a new table row
                row.classList.add(i % 2 === 0 ? 'even' : 'odd'); // Apply even/odd class

                // First cell with icon and link
                var cell1 = document.createElement('td');
                   cell1.textContent = record['name'];
                

                // Second cell
                var cell2 = document.createElement('td');
                cell2.textContent = record['details'];
                // Third cell
                var cell3 = document.createElement('td');
                cell3.textContent = record['added_by'];

                // forth cell
                var cell4 = document.createElement('td');
                cell4.textContent = record['date_modified'];
                //record.date; // Assuming you have a 'date' property in record
                    
                row.appendChild(cell1);
                row.appendChild(cell2);
                row.appendChild(cell3);
                row.appendChild(cell4);

                tableBody.appendChild(row); 
             }
        } else {
            console.error('Request failed. Status: ' + xhr.status);
        }
    };

    xhr.send();
}

document.getElementById('getDataButton').addEventListener('click', fetchDataAndPopulateTable);
document.getElementById('getNotes').addEventListener('click', fetchDataNote);

</script>
<?php include "inc-drawer-contract.php"; ?>
<?php include "inc-footer.php"; ?>