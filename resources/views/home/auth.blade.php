@extends('layouts.app')

@section('content')
<div class="pl-200 pr-200 overflow clearfix">
  <div class="categori-menu-slider-wrapper clearfix">
    <div class="categories-menu">
      <div class="category-heading">
        <h3> All Departments <i class="pe-7s-angle-down"></i></h3>
      </div>
      <div class="category-menu-list pl-2">
        <ul>
          <li>
            <a href="#">Computer & Laptops <i class="pe-7s-angle-right"></i></a>
            <div class="category-menu-dropdown">
              <div class="category-dropdown-style category-common4 mb-40">
                <h4 class="categories-subtitle"> Desktop</h4>
                <ul>
                  <li><a href="#"> Mother Board</a></li>
                  <li><a href="#"> Power Supply</a></li>
                  <li><a href="#"> RAM</a></li>
                  <li><a href="#"> Graphics Card</a></li>
                  <li><a href="#"> Hard Disk Drive</a></li>
                  <li><a href="#">Cooling Fan</a></li>
                  <li><a href="#">HD Cable</a></li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection