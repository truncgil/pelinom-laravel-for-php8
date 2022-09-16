<div class="content">
    <div class="row">
         {{col("col-12","")}} 
         
         <form action="?add" method="post">
                    @csrf
                    <h4>Subscribe User from Newsletter</h4>
                    <?php if(getisset("add")) {
                        ekle([
                            'title' => post("title"),
                            "json" => post("json")
                        ],"subscribe");
                        yonlendir("?addok");
                    } ?>
                    <div class="table-responsive">
                        
                        <table class="table">
                            <tr>
                                <td>
                                    <select name="json" id="" class="form-control">
                                        <option value="">Select User</option>
                                        <?php foreach(db("users")->where("level","Client")->orderBy("id","DESC")->get() AS $user)  { 
                                          ?>
                                         <option value="{{$user->id}}">{{$user->name}} {{$user->surname}}</option> 
                                         <?php } ?>
                                    </select>
                                    
                                </td>
                                <td>
                                    <select name="title" id="" class="form-control">
                                        <option value="">Select Newsletter</option>
                                        <?php foreach(db("newsletter")->orderBy("id","DESC")->get() AS $newsletter)  { 
                                          ?>
                                         <option value="{{$newsletter->title}}">{{$newsletter->title}} </option> 
                                         <?php } ?>
                                    </select>
                                </td>
                                <td><button class="btn btn-primary"><i class="fa fa-plus"></i></button></td>
                            </tr>
                        </table>
                    </div>
                    
                </form>
          
         {{_col()}}
    </div>
    <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title"><i class="fa fa-{{$c->icon}}"></i> {{e2($c->title)}} List</h3>
            </div>
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table">
                        
                        <tr>
                            <th>Newsletter</th>
                            <th>User</th>
                        </tr>
                        <?php $list = db("subscribe")
                        ->leftJoin("users","subscribe.json", "=", "users.id")
                        ->select("users.name","users.surname","subscribe.title")->orderBy("subscribe.id","desc")->simplePaginate(100); 
                        foreach($list AS $l)  { 
                         
                         ?>
                         <tr>
                             <td>
                                {{$l->title}}
                             </td>
                             <td>
                                {{$l->name}} {{$l->surname}}
                             </td>
                         </tr> 
                         <?php } ?>
                    </table>
                </div>

            </div>

            

        </div>

    </div>
</div>