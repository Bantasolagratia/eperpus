
@extends('layout.layoutAdmin')

@section('title')
    <title>Dashboard</title>
@endsection


@section('main-content')






   
      <div class="container-fluid">
        
          <div class="col-lg-12">
             <div class="card">
              <div class="card-body">
              <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                  <li class="nav-item">
                      <a href="javascript:void();" data-target="#riset" data-toggle="pill" class="nav-link active"><i class="icon-note"></i> <span class="hidden-xs">Riset</span></a>
                  </li>
                  <li class="nav-item">
                      <a href="javascript:void();" data-target="#foto" data-toggle="pill" class="nav-link"><i class="zmdi zmdi-book-image"></i> <span class="hidden-xs">Foto</span></a>
                  </li>
              </ul>
              <div class="tab-content p-3">
                  <div class="tab-pane active" id="riset">
                        <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                
                                <th scope="col">Judul</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                           
                           
                            </tbody>
                            </table>
                        </div>
                  </div>

                 
                  <div class="tab-pane" id="foto">
                  <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                            
                            </thead>
                            <tbody>
                               
                            </tbody>
                            </table>
                        </div>
                  </div>
              </div>
          </div>
        </div>
        </div>
          
      </div>
    
      

      <!-- role akun super admin -->
     
      <div class="container-fluid">
        
        <div class="col-lg-12">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#riset" data-toggle="pill" class="nav-link active"><i class="icon-note"></i> <span class="hidden-xs">Riset</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#foto" data-toggle="pill" class="nav-link"><i class="zmdi zmdi-book-image"></i> <span class="hidden-xs">Foto</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#akun" data-toggle="pill" class="nav-link"><i class="zmdi  zmdi-face"></i> <span class="hidden-xs">Akun</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="riset">
                      <div class="table-responsive">
                          <table class="table table-striped">
                          <thead>
                              <tr>
                              
                              <th scope="col">Judul</th>
                              <th scope="col"></th>
                              </tr>
                          </thead>
                          <tbody>
                         
                          </tbody>
                          </table>
                      </div>
                </div>

               
                <div class="tab-pane" id="foto">
                <div class="table-responsive">
                          <table class="table table-striped">
                          <thead>
                       
                
                          </thead>
                          <tbody>
                            
                          </tbody>
                          </table>
                      </div>
                </div>

                <div class="tab-pane" id="akun">
                      <div class="table-responsive">
                          <table class="table table-striped">
                          <thead>
                         
                              <tr>
                              
                              <th scope="col">Nama</th>
                              <th scope="col"></th>
                              </tr>
                          </thead>
                          <tbody>
                         
                          </tbody>
                          </table>
                      </div>
                </div>
            </div>
        </div>
      </div>
      </div>
        
    </div>
  

        

   
      
    
     
     
@endsection