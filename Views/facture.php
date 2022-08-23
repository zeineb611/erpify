<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Caleb Adeleye">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
<title>Receipt </title>
<script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
<!-- Web Fonts
======================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
======================= -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://use.fontawesome.com/65eb163cd4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
<link href="{{ asset('css/invoice.css') }}" rel="stylesheet" />

</head>
<body>

   
<!-- Container -->
<div class="container-fluid invoice-container" id="invoice">

  <!-- Header -->
  <header>
  <div class="row align-items-center">
    <div class="col-sm-7 text-center text-sm-left mb-3 mb-sm-0">
      <img id="logo" src="{{ asset('images/ospoly-logo.png') }}" title="Ospoly" alt="Ospoly Logo" />
    </div>
    <div class="col-sm-5 text-center text-sm-right">
      <h4 class="text-7 mb-0">Receipt</h4>
    </div>
  </div>
  <hr style="background-color: green;">
  </header>
  
  <!-- Main Content -->
  <main  id="receipt">

  <div class="row">
    <div class="col-sm-6"><strong>Date:</strong> <input type="text" id="date" value=""> </div>
    <div class="col-sm-6 text-sm-right"> <strong>Reference No:</strong> <input type="text" id="referance" value=""></div>
    
  </div>
  <div class="row">
    <div class="col-sm-12 text-sm-center"><h3 style="padding-top: 15px;">Facture</h3></div>
    
  </div>
  <hr style="background-color: black;">
  <div class="row">
  <div class="col-sm-6 text-sm-right order-sm-1"> 
    <strong>Company Name:</strong><br/>
  <address>
      <input type="text" id="CName" value="">
</address>
    
   
     <strong>address:</strong>
    <address>
      <input type="text" id="addresse" value="">
</address>
    
    </div>
    
 
    <div class="col-sm-6 order-sm-0"> <strong>Payment By:</strong><br/>
      
      NAME     :<input type="text" id="name" value=""> <br/>
      address  :<input type="text" id="adresse2" value=""><br/>
      ZIP code :<input type="text" id="code_p" value=""><br/>
      city     :<input type="text" id="ville" value=""><br/>
      country  :<input type="text" id="pays" value="">
    
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table mb-0">
    <thead class="card-header">
          <tr>
            <td class="col-3 border-0"><strong>Description</strong></td>
      <td class="col-4 border-0"><strong>unit price</strong></td>
            <td class="col-2 text-center border-0"><strong>Quantity</strong></td>
      <td class="col-1 text-center border-0"><strong>QTY</strong></td>
            <td class="col-2 text-right border-0"><strong>Amount</strong></td>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td class="col-3 border-0"  style="background-color: #dcd8cf;color: #000;">Payment For S.U.G Due</td>
              <td class="col-4 text-1 border-0" style="background-color: #dcd8cf;color: #000;">Staylite</td>
              <td class="col-2 text-center border-0" style="background-color: #dcd8cf;color: #000;">&#8358;250</td>
        <td class="col-1 text-center border-0" style="background-color: #dcd8cf;color: #000;">1</td>
        <td class="col-2 text-right border-0" style="background-color: #2264c4;color: #fff;">&#8358;250</td>
            </tr>
     
          </tbody>
      <tfoot class="card-footer">
            <tr>
              <td colspan="4" class="text-right"><strong>Sub Total:</strong></td>
              <td class="text-right">&#8358;250</td>
            </tr>
            <tr>
              <td colspan="4" class="text-right"><strong>Transaction Fee:</strong></td>
              <td class="text-right">&#8358;50</td>
            </tr>
            <tr>
              <td colspan="4" class="text-right"><strong>Total:</strong></td>
              <td class="text-right">&#8358;300</td>
            </tr>
      <tr>
              <td colspan="4" class="text-right" style="background-color: #dcd8cf;color: #000;"><strong>Receipt No:</strong></td>
              <td class="text-right" style="background-color: #2264c4;color: #fff;">OP/SUGDUE/{{ $list->invoice_no }}</td>
            </tr>
      </tfoot>
        </table>
      </div>
    </div>
  </div>

  </main>
  <!-- Footer -->
  <footer class="text-center mt-4">
  <p class="text-1"><strong>NOTE :</strong> Any alteration on this receipt will be rendered invalid.</p>
 <br><br>
 <div class="row">
    <div class="col-sm-6">
      <img src="{{ asset('images/signatures/pres.png') }}" style="margin-left: 70px;" width="50" />
      <strong>President:</strong>______________</div>

    <div class="col-sm-6"> 
     <img src="{{ asset('images/signatures/fin_sec.png') }}" style="margin-left: 70px;" width="50" /><br>
   <strong> Financial Secretary:</strong>_____________</div>
    
  </div>

 <br>
  <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a> 
    <a href="#" id="download" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</a> </div>
  </footer> 

</div>

  @endforeach

  <script type="text/javascript" src="js/pdf.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="" crossorigin="anonymous" ></script>

  <script>
window.onload = function(){
  document.getElementById("download")
  .addEventListener("click",()=> {
   const invoice = this.document.getElementById("invoice");
 var opt = {
  filename:     'OP/SUGDUE/{{ $list->invoice_no }}',
  image:        { type: 'jpeg', quality: 0.98 },
  html2canvas:  { scale: 2 },
  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
};
   html2pdf().from(invoice).set(opt).save();

  })
}
        
    </script>
</body>
</html>