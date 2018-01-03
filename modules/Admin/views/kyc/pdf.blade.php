
            <style type="text/css">
                table {
                        border-collapse: collapse;
                    }

                    table, th, td {
                        border: 1px solid black;
                        padding-left: 5px;
                    }
            </style>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
             <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD--> 
                    <h3> <center>Research Infotech</center></h3>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-red"></i>
                                        <span class="caption-subject font-red sbold uppercase">KYC : {{$kyc['name']}}</span>
                                    </div>
                                        <hr>
                                         
                                     
                                </div>
                                  
                                <div class="portlet-body2">
                                    
                                     
                                    <table class="table" id="contact" style="width: 100%" border="1px"  text-align="left">
                                        <thead>
                                            @foreach($kyc as $key => $result)
                                            @if($key=="id" || $key=="created_at" || $key=="updated_at" || $key=="AllData")
                                             @else
                                              <tr>
                                             <td> {{ucfirst($key)}}</td> 
                                                <td> {{$result}} </td> 
                                            </tr>
                                            @endif
                                           
                                            @endforeach
                                        </thead>
                                        
                                    </table>
                                    
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            
            
            <!-- END QUICK SIDEBAR -->
        </div>
        
    