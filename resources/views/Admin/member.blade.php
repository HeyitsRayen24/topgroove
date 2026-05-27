<x-headerDashboard title="{{ $title }}"></x-headerDashboard>

    <!-- Main navbar -->
    <x-mainNavbarDashboard></x-mainNavbarDashboard>
    <!-- /main navbar -->

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <x-mainSidebarDashboard></x-mainSidebarDashboard>
        <!-- /main sidebar -->

        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Page header -->
            <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h4>
                            <i class="icon-arrow-left52 mr-2"></i>
                            <span class="font-weight-semibold">Home</span> - Member
                        </h4>
                    </div>
                </div>

                <div class="
              breadcrumb-line breadcrumb-line-light
              header-elements-md-inline
            ">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="{{ route('dashboard.admin') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                            <span class="breadcrumb-item active">Members</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->

            <!-- Content area -->
            <div class="content">
                <!-- Basic datatable -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Tabel Members</h5>
						<div class="header-elements">
	                	</div>
					</div>

					<div class="card-body">
                        {{-- Button --}}
					</div>

					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>No</th>
								<th>Name</th>
								<th>Gender</th>
								<th>Alamat</th>
								<th>Umur</th>
								<th>Poin</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($users as $user)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->gender }}</td>
								<td>{{ $user->address }}</td>
								<td>{{ $user->age }}</td>
                                <td>120</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-eye"></i> Detail</a>
												<a href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
                                
                            @endforeach
						</tbody>
					</table>
				</div>
				<!-- /basic datatable -->

                
            </div>
            <!-- /content area -->

            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                        &copy; 2026 <a href="#"></a> by Yonah
                    </span>
                </div>
            </div>
            <!-- /footer -->
        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
<x-footer></x-footer>