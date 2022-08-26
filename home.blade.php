@extends('layout.app')
    
    @section('body')
    <!-- Content Header (Page header) -->
    <div class="row">
             <div class="col-md-3 no-padding">
        
             </div>
             <div class="col-md-8 no-padding">
                
                    <div class="alert alert-danger alert-dismissable" style="border: 1px solid brown;">
                        <b>REGISTRATION STATUS ACADEMIC YEAR : 2021/2022 - SEMESTER II</b><br>  
                        <b>You have been Registered in BACHELOR OF COMPUTER ENGINEERING - FOUR YEARS - SECOND YEAR</b>
                    </div>
            </div>
         </div>           
            <hr>
     <div class="row">     
        
        <div class="col-md-3 no-padding">
        
        </div>
        <div class="col-md-5 no-padding">
            <div class="ibox">
                <div class="ibox-title">
                    
                    <div class="ibox-tools">

                        
                    </div>
                </div>
                <br><br>
         <div class="card">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                    Dashboard
                </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->

                </div>
              </div><!-- /.card-body -->
           </div>

           <br><br>
         <div class="card">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                   Notifications
                </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px; display: block; width: 430px;" width="430" class="chartjs-render-monitor"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="0" style="height: 0px; display: block; width: 0px;" class="chartjs-render-monitor" width="0"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
           </div>
 


        </div>
            
    
        </div>
        <div class="col-md-3 no-padding">
            <br><br>
            <div class="card">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                 News
                </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px; display: block; width: 430px;" width="430" class="chartjs-render-monitor"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="0" style="height: 0px; display: block; width: 0px;" class="chartjs-render-monitor" width="0"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
         </div>

        
     </div>

@endsection
