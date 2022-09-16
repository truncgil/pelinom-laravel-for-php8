@extends('admin.master')

@section("title")
	{{e2("Dashboard")}}
@endsection
@section('content')

		<div class="content">
			<div class="row">
				<div class="col-6">
					<div class="block">
						<div class="block-content block-content-full">
							<div class="py-20 text-center">
								<div class="mb-20">
									<i class="fa fa-envelope-open fa-8x text-primary" style="padding:8px"></i>
								</div>
								<div class="font-size-h4 font-w600"><?php 
								echo db("users")
								->where("level","Client")
								->where("email","not like","%gmail%")
								->count();
								?> Subscribers</div>
								<div class="text-muted">Other E-Mail Users</div>
								<div class="pt-20">
									<a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
										<i class="fa fa-cog mr-5"></i> Manage list
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="block">
						<div class="block-content block-content-full">
							<div class="py-20 text-center">
								<div class="mb-20">
									<img class="img-fluid" width="128" src="https://play-lh.googleusercontent.com/KSuaRLiI_FlDP8cM4MzJ23ml3og5Hxb9AapaGTMZ2GgR103mvJ3AAnoOFz1yheeQBBI" alt="">
								</div>
								<div class="font-size-h4 font-w600"><?php 
								echo db("users")
								->where("level","Client")
								->where("email","like","%gmail%")
								->count();
								?> Subscribers</div>
								<div class="text-muted">GMail Users</div>
								<div class="pt-20">
									<a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
										<i class="fa fa-cog mr-5"></i> Manage list
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			
			</div>
	
		</div>

@endsection
