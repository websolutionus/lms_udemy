@extends('admin.layouts.master')

@section('content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Invoice
            </h2>
          </div>
          <!-- Page title actions -->
          <div class="col-auto ms-auto d-print-none">
            <button type="button" class="btn btn-primary" onclick="javascript:window.print();">
              <!-- Download SVG icon from http://tabler-icons.io/i/printer -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2"></path><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z"></path></svg>
              Print Invoice
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="card card-lg">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <p class="h3">Company</p>
                <address>
                  Street Address<br>
                  State, City<br>
                  Region, Postal Code<br>
                  ltd@example.com
                </address>
              </div>
              <div class="col-6 text-end">
                <p class="h3">Client</p>
                <address>
                  Street Address<br>
                  State, City<br>
                  Region, Postal Code<br>
                  ctr@example.com
                </address>
              </div>
              <div class="col-12 my-5">
                <h1>Invoice INV/001/15</h1>
              </div>
            </div>
            <table class="table table-transparent table-responsive">
              <thead>
                <tr>
                  <th class="text-center" style="width: 1%"></th>
                  <th>Product</th>
                  <th class="text-center" style="width: 1%">Qnt</th>
                  <th class="text-end" style="width: 1%">Unit</th>
                  <th class="text-end" style="width: 1%">Amount</th>
                </tr>
              </thead>
              <tbody><tr>
                <td class="text-center">1</td>
                <td>
                  <p class="strong mb-1">Logo Creation</p>
                  <div class="text-secondary">Logo and business cards design</div>
                </td>
                <td class="text-center">
                  1
                </td>
                <td class="text-end">$1.800,00</td>
                <td class="text-end">$1.800,00</td>
              </tr>
              <tr>
                <td class="text-center">2</td>
                <td>
                  <p class="strong mb-1">Online Store Design &amp; Development</p>
                  <div class="text-secondary">Design/Development for all popular modern browsers</div>
                </td>
                <td class="text-center">
                  1
                </td>
                <td class="text-end">$20.000,00</td>
                <td class="text-end">$20.000,00</td>
              </tr>
              <tr>
                <td class="text-center">3</td>
                <td>
                  <p class="strong mb-1">App Design</p>
                  <div class="text-secondary">Promotional mobile application</div>
                </td>
                <td class="text-center">
                  1
                </td>
                <td class="text-end">$3.200,00</td>
                <td class="text-end">$3.200,00</td>
              </tr>
              <tr>
                <td colspan="4" class="strong text-end">Subtotal</td>
                <td class="text-end">$25.000,00</td>
              </tr>
              <tr>
                <td colspan="4" class="strong text-end">Vat Rate</td>
                <td class="text-end">20%</td>
              </tr>
              <tr>
                <td colspan="4" class="strong text-end">Vat Due</td>
                <td class="text-end">$5.000,00</td>
              </tr>
              <tr>
                <td colspan="4" class="font-weight-bold text-uppercase text-end">Total Due</td>
                <td class="font-weight-bold text-end">$30.000,00</td>
              </tr>
            </tbody></table>
            <p class="text-secondary text-center mt-5">Thank you very much for doing business with us. We look forward to working with
              you again!</p>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer footer-transparent d-print-none">
      <div class="container-xl">
        <div class="row text-center align-items-center flex-row-reverse">
          <div class="col-lg-auto ms-lg-auto">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank" class="link-secondary" rel="noopener">Documentation</a></li>
              <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
              <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
              <li class="list-inline-item">
                <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                  <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-pink icon-filled icon-inline"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path></svg>
                  Sponsor
                </a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-lg-auto mt-3 mt-lg-0">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item">
                Copyright © 2024
                <a href="." class="link-secondary">Tabler</a>.
                All rights reserved.
              </li>
              <li class="list-inline-item">
                <a href="./changelog.html" class="link-secondary" rel="noopener">
                  v1.0.0-beta21
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
@endsection
