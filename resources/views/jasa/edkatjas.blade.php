@extends('master')

@section('content')
<h3 class="page-title">
                     Form Kategori Jasa
                   </h3> 
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">SalonKu</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Input Kategori Jasa
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Input Kategori Jasa</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="widget-body form">    
                        <form class="cmxform form-horizontal" action="{{ $katjasa->id }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                               <div class="control-group ">
                                    <label for="lastname" class="control-label">Kategori jasa</label>
                                    <div class="controls">
                                      <input style="width:250px;" type="text" name="kategori_jasa" value="{{ $katjasa->kategori_jasa }}" />
                                    </div>
                                </div>                
                                
                                <div class="form-actions">
                                    <button class="btn btn-success" type="submit">Save</button></form>
                                    <a href="/katjas"><button class="btn" type="button">Cancel</button></a>
                                </div>
    
@endsection