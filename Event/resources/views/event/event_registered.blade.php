@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
				
				<div class="site-name">
                                        <h1>Registerd for event</h1>
                                    </div>
                   
                    <table class="table table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Department</th>
								<th>Student ID</th>
							
							</tr>
						</thead>
						<tbody>
						<?php foreach ($registered_users as $user) {?>
							<tr>
								<td><?php echo $user->name; ?></td>
								<td><?php echo $user->email; ?></td>
								<td><?php echo $user->dept; ?></td>
								<td><?php echo $user->s_id; ?></td>
								
							</tr>
                            <?php } ?>
					
						</tbody>
					</table>
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection

