<?php

namespace App\Http\Controllers;

use App\admin;
use App\guest;
use App\books;
use App\clothes;
use App\computers;
use App\cars;
use App\cart;
use App\comments;
use App\Events\delete_comment;
use App\Events\edit_comment;
use App\Events\remove_pro;
use App\Events\see_comment;
use App\Events\update_pro;
use App\images;
use App\product_love;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class events extends Controller
{

    public function edite_data_e2(Request $q){//id_thing
        return response()->json([
            'name'=>clothes::find($q->id_thing)->name,
            'price'=>clothes::find($q->id_thing)->price,
            'quantity'=>clothes::find($q->id_thing)->quantity,
            'color'=>clothes::find($q->id_thing)->color,
            'size'=>clothes::find($q->id_thing)->size,
            'passengers'=>clothes::find($q->id_thing)->number_of_passengers,
            'number_evaluation'=>DB::table('clothes')->find($q->id_thing)->number_evaluation,
            'type_id'=>clothes::find($q->id_thing)->type_id,
            'Discount'=>clothes::find($q->id_thing)->Discount
        ]);
    }
    public function edite_data_e3(Request $q){//id_thing
        return response()->json([
            'name'=>computers::find($q->id_thing)->name,
            'price'=>computers::find($q->id_thing)->price,
            'quantity'=>computers::find($q->id_thing)->quantity,
            'descriptions' => computers::find($q->id_thing)->descriptions,
            'number_evaluation'=>DB::table('computers')->find($q->id_thing)->number_evaluation,
            'Type_id'=>computers::find($q->id_thing)->type_id,
            'Discount'=>computers::find($q->id_thing)->Discount
        ]);
    }
    public function edite_data_e4(Request $q){//id_thing
        return response()->json([
            'name'=>books::find($q->id_thing)->name,
            'price'=>books::find($q->id_thing)->price,
            'quantity'=>books::find($q->id_thing)->quantity,
            'description'=>books::find($q->id_thing)->description,
            'number_evaluation'=>DB::table('books')->find($q->id_thing)->number_evaluation,
            'type_id'=>books::find($q->id_thing)->type_id,
            'Discount'=>books::find($q->id_thing)->Discount
        ]);
    }
    public function delete_data_e2(Request $Re){//id_thing
        clothes::find($Re->id_thing)->delete();
        broadcast(new remove_pro('clothes',$Re->id_thing))->toOthers();
    }
    public function delete_data_e3(Request $Re){//id_thing
        computers::find($Re->id_thing)->delete();
        broadcast(new remove_pro('computers',$Re->id_thing))->toOthers();
    }
    public function delete_data_e4(Request $Re){//id_thing
        books::find($Re->id_thing)->delete();
        broadcast(new remove_pro('books',$Re->id_thing))->toOthers();
    }
    public function insert_data_e2(Request $R)
    {
        $img = $R->file('img');
        $img_name = time() . '.' . $img->extension();
        $R->img->move('images/Producer/img_clothes', $img_name);
        clothes::insert([
            'Type_id' => $R->select,
            'images' => 'images/Producer/img_clothes//' . $img_name,
            'quantity' => $R->Quantity,
            'name' => $R->name,
            'color' => $R->color,
            'size' => $R->size,
            'price' => $R->price,
            'number_evaluation' => $R->evaluation,
            'Discount' => $R->Discount
        ]);
        $TB = '';
        foreach (clothes::get()->chunk(10) as $ke) {
            foreach ($ke as $key){
                $TB .= '<tr class="t' . $key->id . '" id="' . $key->id . '" >
                   <td><img class="img_t" src="' . $key->images . '" alt="" /></td>
                   <td class="name_t">' . $key->name . '</td>
                    <td>';
                if ($key->quantity > 4) {
                    $TB .= '<button class="pd-setting">ِِAlright</button>';
                } elseif ($key->quantity < 3) {
                    $TB .= '<button class="ds-setting">Danger</button>';
                } else {
                    $TB .= '<button class="ps-setting">May expire</button>';
                }
                $TB .= '</td>
            <td class="quan_t">' . $key->quantity . '</td>
            <td class="price_t">$' . $key->price . '</td>
            <td class="price_t" style="color: yellow">' . $key->number_evaluation . '</td>
                <td>
                    <button type="button" data-toggle="tooltip" title="Edit" class="pd-setting-ed edit" id="' . $key->id . '" ><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></button>
                    <button data-toggle="tooltip" title="Drop" class="pd-setting-ed drop" atrs_da="' . $key->id . '" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                </td>
            </tr>';
            }
        }

        return response()->json($TB);
    }
    public function insert_data_e3(Request $R)
    {
        $img = $R->file('img');
        $img_name = time() . '.' . $img->extension();
        $R->img->move('images/Producer/computer', $img_name);
        computers::insert([
            'type_id' => $R->select,
            'images' => 'images/Producer/computer//' . $img_name,
            'quantity' => $R->Quantity,
            'name' => $R->name,
            'descriptions' => $R->description,
            'price' => $R->price,
            'number_evaluation' => $R->evaluation,
            'Discount' => $R->Discount
        ]);
        $TB = '';
        foreach (computers::get()->chunk(10) as $ke) {
            foreach ($ke as $key){
                $TB .= '<tr class="t' . $key->id . '" id="' . $key->id . '" >
                   <td><img class="img_t" src="' . $key->images . '" alt="" /></td>
                   <td class="name_t">' . $key->name . '</td>
                    <td>';
                if ($key->quantity > 4) {
                    $TB .= '<button class="pd-setting">ِِAlright</button>';
                } elseif ($key->quantity < 3) {
                    $TB .= '<button class="ds-setting">Danger</button>';
                } else {
                    $TB .= '<button class="ps-setting">May expire</button>';
                }
                $TB .= '</td>
            <td class="quan_t">' . $key->quantity . '</td>
            <td class="price_t">$' . $key->price . '</td>
            <td class="price_t" style="color: yellow">' . $key->number_evaluation . '</td>
                <td>
                    <button type="button" data-toggle="tooltip" title="Edit" class="pd-setting-ed edit" id="' . $key->id . '" ><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></button>
                    <button data-toggle="tooltip" title="Drop" class="pd-setting-ed drop" atrs_da="' . $key->id . '" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                </td>
            </tr>';
            }
        }

        return response()->json($TB);
    }
    public function insert_data_e4(Request $R)
    {
        $img = $R->file('img');
        $img_name = time() . '.' . $img->extension();
        $R->img->move('images/Producer/book', $img_name);
        books::insert([
            'type_id' => $R->select,
            'images' => 'images/Producer/book//' . $img_name,
            'quantity' => $R->Quantity,
            'name' => $R->name,
            'description' => $R->description,
            'price' => $R->price,
            'number_evaluation' => $R->evaluation,
            'Discount' => $R->Discount
        ]);
        $TB = '';
        foreach (books::get()->chunk(10) as $ke) {
            foreach ($ke as $key){
                $TB .= '<tr class="t' . $key->id . '" id="' . $key->id . '" >
                   <td><img class="img_t" src="' . $key->images . '" alt="" /></td>
                   <td class="name_t">' . $key->name . '</td>
                    <td>';
                if ($key->quantity > 4) {
                    $TB .= '<button class="pd-setting">ِِAlright</button>';
                } elseif ($key->quantity < 3) {
                    $TB .= '<button class="ds-setting">Danger</button>';
                } else {
                    $TB .= '<button class="ps-setting">May expire</button>';
                }
                $TB .= '</td>
            <td class="quan_t">' . $key->quantity . '</td>
            <td class="price_t">$' . $key->price . '</td>
            <td class="price_t" style="color: yellow">' . $key->number_evaluation . '</td>
                <td>
                    <button type="button" data-toggle="tooltip" title="Edit" class="pd-setting-ed edit" id="' . $key->id . '" ><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></button>
                    <button data-toggle="tooltip" title="Drop" class="pd-setting-ed drop" atrs_da="' . $key->id . '" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                </td>
            </tr>';
            }
        }

        return response()->json($TB);
    }
    public function search_data_cars(Request $R){//data_search
        ;
        $TB='';
        foreach (cars::where('name','like',"%$R->data_search%")->get()->chunk(10) as $ke) {
            foreach ($ke as $key){
                $TB .= '<tr class="t' . $key->id . '" id="' . $key->id . '" >
                   <td><img class="img_t" src="' . $key->images . '" alt="" /></td>
                   <td class="name_t">' . $key->name . '</td>
                    <td>';
                if ($key->quantity > 4) {
                    $TB .= '<button class="pd-setting">ِِAlright</button>';
                } elseif ($key->quantity < 3) {
                    $TB .= '<button class="ds-setting">Danger</button>';
                } else {
                    $TB .= '<button class="ps-setting">May expire</button>';
                }
                $TB .= '</td>
            <td class="quan_t">' . $key->quantity . '</td>
            <td class="price_t">$' . $key->price . '</td>
            <td class="price_t" style="color: yellow">' . $key->number_evaluation . '</td>
                <td>
                    <button type="button" data-toggle="tooltip" title="Edit" class="pd-setting-ed edit" id="' . $key->id . '" ><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></button>
                    <button type="submit" data-toggle="tooltip" title="Images" class="pd-setting-ed images" id_img="'.$key->id.'" n_get_img="'.$key->name.'" name_t="cars"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/><path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/></svg></button>
                    <button data-toggle="tooltip" title="Drop" class="pd-setting-ed drop" atrs_da="' . $key->id . '" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                </td>
            </tr>';
            }
        }
        return response()->json($TB);
    }
    public function search_data_cars_e2(Request $R){//data_search
        ;
        $TB='';
        foreach (clothes::where('name','like',"%$R->data_search%")->get()->chunk(10) as $ke) {
            foreach ($ke as $key){
                $TB .= '<tr class="t' . $key->id . '" id="' . $key->id . '" >
                   <td><img class="img_t" src="' . $key->images . '" alt="" /></td>
                   <td class="name_t">' . $key->name . '</td>
                    <td>';
                if ($key->quantity > 4) {
                    $TB .= '<button class="pd-setting">ِِAlright</button>';
                } elseif ($key->quantity < 3) {
                    $TB .= '<button class="ds-setting">Danger</button>';
                } else {
                    $TB .= '<button class="ps-setting">May expire</button>';
                }
                $TB .= '</td>
            <td class="quan_t">' . $key->quantity . '</td>
            <td class="price_t">$' . $key->price . '</td>
            <td class="price_t" style="color: yellow">' . $key->number_evaluation . '</td>
                <td>
                    <button type="button" data-toggle="tooltip" title="Edit" class="pd-setting-ed edit" id="' . $key->id . '" ><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></button>
                    <button type="submit" data-toggle="tooltip" title="Images" class="pd-setting-ed images" id_img="'.$key->id.'" n_get_img="'.$key->name.'" name_t="clothes"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/><path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/></svg></button>
                    <button data-toggle="tooltip" title="Drop" class="pd-setting-ed drop" atrs_da="' . $key->id . '" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                </td>
            </tr>';
            }
        }
        return response()->json($TB);
    }
    public function search_data_cars_e3(Request $R){//data_search
        ;
        $TB='';
        foreach (computers::where('name','like',"%$R->data_search%")->get()->chunk(10) as $ke) {
            foreach ($ke as $key){
                $TB .= '<tr class="t' . $key->id . '" id="' . $key->id . '" >
                   <td><img class="img_t" src="' . $key->images . '" alt="" /></td>
                   <td class="name_t">' . $key->name . '</td>
                    <td>';
                if ($key->quantity > 4) {
                    $TB .= '<button class="pd-setting">ِِAlright</button>';
                } elseif ($key->quantity < 3) {
                    $TB .= '<button class="ds-setting">Danger</button>';
                } else {
                    $TB .= '<button class="ps-setting">May expire</button>';
                }
                $TB .= '</td>
            <td class="quan_t">' . $key->quantity . '</td>
            <td class="price_t">$' . $key->price . '</td>
            <td class="price_t" style="color: yellow">' . $key->number_evaluation . '</td>
                <td>
                    <button type="button" data-toggle="tooltip" title="Edit" class="pd-setting-ed edit" id="' . $key->id . '" ><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></button>
                    <button type="submit" data-toggle="tooltip" title="Images" class="pd-setting-ed images" id_img="'.$key->id.'" n_get_img="'.$key->name.'" name_t="computers"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/><path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/></svg></button>
                    <button data-toggle="tooltip" title="Drop" class="pd-setting-ed drop" atrs_da="' . $key->id . '" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                </td>
            </tr>';
            }
        }
        return response()->json($TB);
    }
    public function search_data_cars_e4(Request $R){//data_search
        ;
        $TB='';
        foreach (books::where('name','like',"%$R->data_search%")->get()->chunk(10) as $ke) {
            foreach ($ke as $key){
                $TB .= '<tr class="t' . $key->id . '" id="' . $key->id . '" >
                   <td><img class="img_t" src="' . $key->images . '" alt="" /></td>
                   <td class="name_t">' . $key->name . '</td>
                    <td>';
                if ($key->quantity > 4) {
                    $TB .= '<button class="pd-setting">ِِAlright</button>';
                } elseif ($key->quantity < 3) {
                    $TB .= '<button class="ds-setting">Danger</button>';
                } else {
                    $TB .= '<button class="ps-setting">May expire</button>';
                }
                $TB .= '</td>
            <td class="quan_t">' . $key->quantity . '</td>
            <td class="price_t">$' . $key->price . '</td>
            <td class="price_t" style="color: yellow">' . $key->number_evaluation . '</td>
                <td>
                    <button type="button" data-toggle="tooltip" title="Edit" class="pd-setting-ed edit" id="' . $key->id . '" ><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></button>
                    <button type="submit" data-toggle="tooltip" title="Images" class="pd-setting-ed images" id_img="'.$key->id.'" n_get_img="'.$key->name.'" name_t="books"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/><path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/></svg></button>
                    <button data-toggle="tooltip" title="Drop" class="pd-setting-ed drop" atrs_da="' . $key->id . '" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                </td>
            </tr>';
            }
        }
        return response()->json($TB);
    }
    public function update_data_cars(Request $R){
        $img = $R->file('img');
        $img_name = time() . '.' . $img->getClientOriginalExtension();
        $img_path='images/Producer/car//' . $img_name;
        $R->img->move('images/Producer/car', $img_name);
        $var=cars::find($R->id);
        $var->images=$img_path ?? $var->images;
        $var->Type_id = $R->select ?? $var->Type_id;
        $var->quantity = $R->Quantity ?? $var->quantity;
        $var->name = $R->name ?? $var->name;
        $var->color = $R->color ?? $var->color;
        $var->size = $R->size ?? $var->size;
        $var->number_of_passengers = $R->passengers ?? $var->number_of_passengers;
        $var->price = $R->price ?? $var->price;
        $var->number_evaluation = $R->evaluation ?? $var->number_evaluation;
        $var->Discount = $R->Discount ?? $var->Discount;
        $var->save();
        $TB = '';
        $TB .= '<td>
        <td><img class="img_t" src="'. $var->images .'" style="width:150px" alt="" /></td>
                   <td class="name_t">' . $var->name . '</td>
                    <td>';
        if ($var->quantity > 4) {
            $TB .= '<button class="pd-setting">ِِAlright</button>';
        } elseif ($var->quantity < 3) {
            $TB .= '<button class="ds-setting">Danger</button>';
        } else {
            $TB .= '<button class="ps-setting">May expire</button>';
        }
        $TB.= '</td>
        <td class="quan_t">'.$var->quantity.'</td>
        <td class="price_t">$'.$var->price.'</td>
        <td class="price_t" style="color: yellow">'. $var->number_evaluation .'</td>
        <td>';
            foreach(DB::table('images')->where('id_cars',$var->id)->get() as $k => $val){
            $TB.='  <input type="hidden" class="'.Str::slug($var->name,'_').'_'.$k .'" id_'.$k.'="'.$val->id.'">';
            }
            $TB.=' <button type="submit" data-toggle="tooltip" title="Edit" class="pd-setting-ed edit" id="'.$var->id.'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button type="submit" data-toggle="tooltip" title="Images" class="pd-setting-ed images" id_img="'.$var->id.'" n_get_img="'.$var->name.'" name_t=cars><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/><path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/></svg></button>
            <button type="submit" data-toggle="tooltip" title="Drop" class="pd-setting-ed drop" atrs_da="'.$var->id .'"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
        </td>';
                broadcast(new update_pro('cars',$var->id,$var->price,$var->name,$var->images))->toOthers();
        return response()->json($TB);
    }
    public function update_data_e2(Request $R){
        $img='';$img_name='';$img_path='';
        if($R->file('img')){
        $img = $R->file('img');
        $img_name = time() . '.' . $img->getClientOriginalExtension();
        $img_path='images/Producer/img_clothes//' . $img_name;
        $R->img->move('images/Producer/img_clothes', $img_name);
        }
        $var=clothes::find($R->id);
        $var->images=$img_path ?? $var->images;
        $var->Type_id = $R->select ?? $var->Type_id;
        $var->quantity = $R->Quantity ?? $var->quantity;
        $var->name = $R->name ?? $var->name;
        $var->color = $R->color ?? $var->color;
        $var->size = $R->size ?? $var->size;
        $var->price = $R->price ?? $var->price;
        $var->number_evaluation = $R->evaluation ?? $var->number_evaluation;
        $var->Discount = $R->Discount ?? $var->Discount;
        $var->save();
        $TB = '';
        $TB .= '<td><img class="img_t" src="' . $var->images . '" alt="" /></td>
                   <td class="name_t">' . $var->name . '</td>
                    <td>';
        if ($var->quantity > 4) {
            $TB .= '<button class="pd-setting">ِِAlright</button>';
        } elseif ($var->quantity < 3) {
            $TB .= '<button class="ds-setting">Danger</button>';
        } else {
            $TB .= '<button class="ps-setting">May expire</button>';
        }
        $TB.= '</td>
            <td class="quan_t">' . $var->quantity . '</td>
            <td class="price_t">$' . $var->price . '</td>
            <td class="price_t" style="color: yellow">' . $var->number_evaluation . '</td>
                <td>
                    <button type="button" data-toggle="tooltip" title="Edit" class="pd-setting-ed edit" id="' . $var->id . '" ><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></button>
                    <button data-toggle="tooltip" title="Drop" class="pd-setting-ed drop" atrs_da="' . $var->id . '" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                </td>';
        return response()->json($TB);

    }
    public function update_data_e3(Request $R){
        $img = $R->file('img');
        $img_name = time() . '.' . $img->getClientOriginalExtension();
        $img_path='images/Producer/computer//' . $img_name;
        $R->img->move('images/Producer/computer', $img_name);
        $var=computers::find($R->id);
        $var->images=$img_path ?? $var->images;
        $var->type_id = $R->select ?? $var->type_id;
        $var->quantity = $R->Quantity ?? $var->quantity;
        $var->name = $R->name ?? $var->name;
        $var->descriptions = $R->description ?? $var->descriptions;
        $var->price = $R->price ?? $var->price;
        $var->number_evaluation = $R->evaluation ?? $var->number_evaluation;
        $var->Discount = $R->Discount ?? $var->Discount;
        $var->save();
        $TB = '';
        $TB .= '<td><img class="img_t" src="' . $var->images . '" alt="" /></td>
                   <td class="name_t">' . $var->name . '</td>
                    <td>';
        if ($var->quantity > 4) {
            $TB .= '<button class="pd-setting">ِِAlright</button>';
        } elseif ($var->quantity < 3) {
            $TB .= '<button class="ds-setting">Danger</button>';
        } else {
            $TB .= '<button class="ps-setting">May expire</button>';
        }
        $TB.= '</td>
            <td class="quan_t">' . $var->quantity . '</td>
            <td class="price_t">$' . $var->price . '</td>
            <td class="price_t" style="color: yellow">' . $var->number_evaluation . '</td>
                <td>
                    <button type="button" data-toggle="tooltip" title="Edit" class="pd-setting-ed edit" id="' . $var->id . '" ><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></button>
                    <button data-toggle="tooltip" title="Drop" class="pd-setting-ed drop" atrs_da="' . $var->id . '" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                </td>';
        return response()->json($TB);

    }
    public function update_data_e4(Request $R){
        $img = $R->file('img');
        $img_name = time() . '.' . $img->getClientOriginalExtension();
        $img_path='images/Producer/book//' . $img_name;
        $R->img->move('images/Producer/book', $img_name);
        $var=books::find($R->id);
        $var->images=$img_path ?? $var->images;
        $var->type_id = $R->select ?? $var->type_id;
        $var->quantity = $R->Quantity ?? $var->quantity;
        $var->name = $R->name ?? $var->name;
        $var->description = $R->description ?? $var->description;
        $var->price = $R->price ?? $var->price;
        $var->number_evaluation = $R->evaluation ?? $var->number_evaluation;
        $var->Discount = $R->Discount ?? $var->Discount;
        $var->save();
        $TB = '';
        $TB .= '<td><img class="img_t" src="' . $var->images . '" alt="" /></td>
                   <td class="name_t">' . $var->name . '</td>
                    <td>';
        if ($var->quantity > 4) {
            $TB .= '<button class="pd-setting">ِِAlright</button>';
        } elseif ($var->quantity < 3) {
            $TB .= '<button class="ds-setting">Danger</button>';
        } else {
            $TB .= '<button class="ps-setting">May expire</button>';
        }
        $TB.= '</td>
            <td class="quan_t">' . $var->quantity . '</td>
            <td class="price_t">$' . $var->price . '</td>
            <td class="price_t" style="color: yellow">' . $var->number_evaluation . '</td>
                <td>
                    <button type="button" data-toggle="tooltip" title="Edit" class="pd-setting-ed edit" id="' . $var->id . '" ><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></button>
                    <button data-toggle="tooltip" title="Drop" class="pd-setting-ed drop" atrs_da="' . $var->id . '" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                </td>';
        return response()->json($TB);

    }
    public function update_profile(Request $R){
        $img = $R->file('img');
        $img_name = time() . '.' . $img->getClientOriginalExtension()??"";
        $img_path='images/persons//' . $img_name;
        $R->img->move('images/persons', $img_name);
        $user=admin::find(Auth::guard('admin')->user()->id);
        $user->images=$img_path;
        $user->name=$R->name;
        $user->email=$R->email;
        $user->phone=$R->phone;
        $user->save();
        return response()->json([
            'name'=>$user->name,
            'image'=>$user->images
        ]);
    }
    public function event_login(Request $R){
        if(Auth::guard('admin')->attempt(['email' => $R->email, 'password' => $R->password])){
            return redirect()->route('dashboard');
        }elseif(Auth::guard('web')->attempt(['email' => $R->email, 'password' => $R->password])){
            return redirect()->route('profile');
        }else{
            return redirect()->route('login');
        }
    }
    public function comment_insert(Request $R){
            if($R->name_t=='cars'){
                comments::insert([
                    'id_user'=>Auth::user()->id,
                    'id_cars'=>$R->id_pro,
                    'text_comment'=>$R->comment,
                    'date'=>now()
                ]);
                broadcast(new see_comment('actve'))->toOthers();
            }
            if($R->name_t=='books'){
                comments::insert([
                    'id_user'=>Auth::user()->id,
                    'id_books'=>$R->id_pro,
                    'text_comment'=>$R->comment,
                    'date'=>now()
                ]);
                broadcast(new see_comment('actve'))->toOthers();
            }
            if($R->name_t=='clothes'){
                comments::insert([
                    'id_user'=>Auth::user()->id,
                    'id_clothes'=>$R->id_pro,
                    'text_comment'=>$R->comment,
                    'date'=>now()
                ]);
                broadcast(new see_comment('actve'))->toOthers();
            }
            if($R->name_t=='computers'){
                comments::insert([
                    'id_user'=>Auth::user()->id,
                    'id_computer'=>$R->id_pro,
                    'text_comment'=>$R->comment,
                    'date'=>now()
                ]);
                broadcast(new see_comment('actve'))->toOthers();
            }
    }
    public function go_to_grid(Request $R){
        session()->put('the_pro',$R->name_t);//nm_s
        session()->put('id_pro',$R->pro_id);
    }
    public function show_events_pro(Request $R){
        if($R->message=='carts'){
            $R->session()->put('go_pages','carts');
        }elseif($R->message=='settings'){
            $R->session()->put('go_pages','settings');
        }elseif($R->message=='order'){
            $R->session()->put('go_pages','order');
        }else{
            $R->session()->put('go_pages','index');
        }
    }
    public function drop_pro_user(Request $R){
        product_love::where([['id_'.$R->name_t,$R->id_pro],['id_user',Auth::user()->id]])->delete();
    }
    //insertOrIgnore
    public function update_profile_user(Request $R){//&&Str::contains($R->phone,['012','011','010'])
        if(Str::contains($R->email, '@gmail.com')){
            $img = $R->file('img');
            $img_name = time() . '.' . $img->getClientOriginalExtension();
            $img_path='images\persons//' . $img_name;
            $R->img->move('images\persons', $img_name);
            $user=guest::find($R->id);
            $user->images=$img_path;
            $user->name=$R->name;
            $user->email=$R->email;
            $user->phone=$R->phone;
            $user->save();
            return response()->json([
                'name'=>$user->name,
                'image'=>$user->images
            ]);
        }
    }
    public function comment_edit(Request $R){
        comments::find($R->id_pro)->update(['text_comment' => $R->comment,'date' => now()]);
            broadcast(new edit_comment($R->id_pro))->toOthers();
    }
    public function comment_delete(Request $R){ comments::find($R->id_pro)->delete();
        broadcast(new delete_comment($R->id_pro))->toOthers();}

	public function add_cart_only(Request $R)
	{
        if(session()->get('the_pro') == 'cars'){
            if(cart::where([['pro_car_id',$R->id_pro],['user_id',Auth::user()->id]])->get() != '[]'){
                cart::where([['pro_car_id',$R->id_pro],['user_id',Auth::user()->id]])->delete();
                return response()->json('deleted');
            }else{/*
                    $inte=(int)cars::find($R->id_pro)->price;
                    $des=(int)cars::find($R->id_pro)->Discount;
                    $val=$inte*$des/100;
                    $fin_val=(int)cars::find($R->id_pro)->price-$val;*/
                    cart::insert([
                        'user_id'=>Auth::user()->id,
                        'pro_car_id'=>$R->id_pro,
                        'the_price'=>cars::find($R->id_pro)->price,
                        'number_pro'=>$R->quantity ?? '1',
                        'total_price'=>cars::find($R->id_pro)->price*$R->quantity,
                        'date'=>now()
                    ]);
                    return response()->json('insert');
            }
        }
        elseif(session()->get('the_pro') == 'books'){
            if(cart::where([['pro_book_id',$R->id_pro],['user_id',Auth::user()->id]])->get() != '[]'){
                cart::where([['pro_book_id',$R->id_pro],['user_id',Auth::user()->id]])->delete();
                return response()->json('deleted');
            }else{
                cart::insert([
                'user_id'=>Auth::user()->id,
                'pro_book_id'=>$R->id_pro,
                'the_price'=>books::find($R->id_pro)->price,
                'number_pro'=>$R->quantity ?? '1',
                'total_price'=>books::find($R->id_pro)->price*$R->quantity,
                'date'=>now()
            ]);
            return response()->json('insert');
            }
        }
        elseif(session()->get('the_pro') == 'clothes'){
            if(cart::where([['pro_clothe_id',$R->id_pro],['user_id',Auth::user()->id]])->get() != '[]'){
                cart::where([['pro_clothe_id',$R->id_pro],['user_id',Auth::user()->id]])->delete();
                return response()->json('deleted');
            }else{
                cart::insert([
                'user_id'=>Auth::user()->id,
                'pro_clothe_id'=>$R->id_pro,
                'the_price'=>clothes::find($R->id_pro)->price,
                'number_pro'=>$R->quantity ?? '1',
                'total_price'=>clothes::find($R->id_pro)->price*$R->quantity,
                'date'=>now()
            ]);
            return response()->json('insert');
            }
        }
        elseif(session()->get('the_pro') == 'computers'){
            if(cart::where([['pro_computer_id',$R->id_pro],['user_id',Auth::user()->id]])->get() != '[]'){
                cart::where([['pro_computer_id',$R->id_pro],['user_id',Auth::user()->id]])->delete();
                return response()->json('deleted');
            }else{
                cart::insert([
                'user_id'=>Auth::user()->id,
                'pro_computer_id'=>$R->id_pro,
                'the_price'=>computers::find($R->id_pro)->price,
                'number_pro'=>$R->quantity ?? '1',
                'total_price'=>computers::find($R->id_pro)->price*$R->quantity,
                'date'=>now()
            ]);
            return response()->json('insert');
            }
        }
    }
    public function add_bestlist_pro(Request $R){

        if(session()->get('the_pro') == 'cars'){
            if(product_love::where([['id_cars',$R->id_pro],['id_user',Auth::user()->id]])->get() != '[]'){
                product_love::where([['id_cars',$R->id_pro],['id_user',Auth::user()->id]])->delete();
                $star='<svg width="1.2em" height="1.2em" style="color:#152036;margin-top:11px" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
              </svg>';
                return response()->json($star);
            }else{
                product_love::insert([
                    'id_user'=>Auth::user()->id,
                    'id_cars'=>$R->id_pro
                ]);
                $star='<svg width="1.2em" style="margin-top:11px;color:#ffa61fec" height="1.2em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>';
                return response()->json($star);
            }
        }
        if(session()->get('the_pro') == 'books'){
            if(product_love::where([['id_books',$R->id_pro],['id_user',Auth::user()->id]])->get() != '[]'){
                product_love::where([['id_books',$R->id_pro],['id_user',Auth::user()->id]])->delete();
                $star='<svg width="1.2em" height="1.2em" style="color:#152036;margin-top:11px" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
              </svg>';
                return response()->json($star);
            }else{
                product_love::insert([
                    'id_user'=>Auth::user()->id,
                    'id_books'=>$R->id_pro
                ]);
                $star='<svg width="1.2em" style="margin-top:11px;color:#ffa61fec" height="1.2em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>';
                return response()->json($star);
            }
        }
        if(session()->get('the_pro') == 'clothes'){
            if(product_love::where([['id_clothes',$R->id_pro],['id_user',Auth::user()->id]])->get() != '[]'){
                product_love::where([['id_clothes',$R->id_pro],['id_user',Auth::user()->id]])->delete();
                $star='<svg width="1.2em" height="1.2em" style="color:#152036;margin-top:11px" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
              </svg>';
                return response()->json($star);
            }else{
                product_love::insert([
                    'id_user'=>Auth::user()->id,
                    'id_clothes'=>$R->id_pro
                ]);
                $star='<svg width="1.2em" style="margin-top:11px;color:#ffa61fec" height="1.2em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>';
                return response()->json($star);
            }
        }
        if(session()->get('the_pro') == 'computers'){
            if(product_love::where([['id_computers',$R->id_pro],['id_user',Auth::user()->id]])->get() != '[]'){
                product_love::where([['id_computers',$R->id_pro],['id_user',Auth::user()->id]])->delete();
                $star='<svg width="1.2em" height="1.2em" style="color:#152036;margin-top:11px" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
              </svg>';
                return response()->json($star);
            }else{
                product_love::insert([
                    'id_user'=>Auth::user()->id,
                    'id_computers'=>$R->id_pro
                ]);
                $star='<svg width="1.2em" style="margin-top:11px;color:#ffa61fec" height="1.2em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>';
                return response()->json($star);
            }
        }
    }
    public function select_img_(Request $R){
        $R->session()->put('id_img',$R->id_img);
        $R->session()->put('name_t_img',$R->name_t);
        $body='';
        if(collect(DB::table('images')->where('id_'.$R->name_t,$R->id_img)->get('id'))->count() >= 4){
            $body.='<button type="submit" class="btn btn-outline-light update_0_img style_btn">update image</button>';
        }else{
            $body.='<button type="submit" class="btn btn-outline-light save_img style_btn">save image</button>';
        }
        $name_f_g_id=Str::slug($R->imag_na,'_');
        return response()->json(['body'=>$body,'name_f_g_id'=>$name_f_g_id]);
    }
    public function add_or_update(Request $R){
        if(session()->get('name_t_img')=='cars'){
            if($R->img_1 !=null){
                    $img_name = microtime(true) . '.' . $R->file('img_1')->Extension();
                    $img_path_1='images/some_img_cars/' . $img_name;
                    $R->img_1->move('images/some_img_cars', $img_name);
                    images::insert([
                        'id_cars'=>session()->get('id_img'),
                        'images'=>$img_path_1,
                    ]);

            }
            if($R->img_2 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_2')->Extension();
                $img_path_1='images/some_img_cars/' . $img_name;
                $R->img_2->move('images/some_img_cars', $img_name);
                images::insert([
                    'id_cars'=>session()->get('id_img'),
                    'images'=>$img_path_1,
                ]);
            }

            if($R->img_3 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_3')->Extension();
                $img_path_1='images/some_img_cars/' . $img_name;
                $R->img_3->move('images/some_img_cars', $img_name);
                images::insert([
                    'id_cars'=>session()->get('id_img'),
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_4 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_4')->Extension();
                $img_path_1='images/some_img_cars/' . $img_name;
                $R->img_4->move('images/some_img_cars', $img_name);
                images::insert([
                    'id_cars'=>session()->get('id_img'),
                    'images'=>$img_path_1,
                ]);
            }
        }
        if(session()->get('name_t_img')=='books'){
            if($R->img_1 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_1')->Extension();
                $img_path_1='images/some_img_books/' . $img_name;
                $R->img_1->move('images/some_img_books', $img_name);
                images::insert([
                    'id_books'=>session()->get('id_img'),
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_2 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_2')->Extension();
                $img_path_1='images/some_img_books/' . $img_name;
                $R->img_2->move('images/some_img_books', $img_name);
                images::insert([
                    'id_books'=>session()->get('id_img'),
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_3 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_3')->Extension();
                $img_path_1='images/some_img_books/' . $img_name;
                $R->img_3->move('images/some_img_books', $img_name);
                images::insert([
                    'id_books'=>session()->get('id_img'),
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_4 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_4')->Extension();
                $img_path_1='images/some_img_books/' . $img_name;
                $R->img_4->move('images/some_img_books', $img_name);
                images::insert([
                    'id_books'=>session()->get('id_img'),
                    'images'=>$img_path_1,
                ]);
            }
        }
        if(session()->get('name_t_img')=='clothes'){
            if($R->img_1 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_1')->Extension();
                $img_path_1='images/some_img_clothes/' . $img_name;
                $R->img_1->move('images/some_img_clothes', $img_name);
                images::insert([
                    'id_clothes'=>session()->get('id_img'),
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_2 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_2')->Extension();
                $img_path_1='images/some_img_clothes/' . $img_name;
                $R->img_2->move('images/some_img_clothes', $img_name);
                images::insert([
                    'id_clothes'=>session()->get('id_img'),
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_3 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_3')->Extension();
                $img_path_1='images/some_img_clothes/' . $img_name;
                $R->img_3->move('images/some_img_clothes', $img_name);
                images::insert([
                    'id_clothes'=>session()->get('id_img'),
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_4 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_4')->Extension();
                $img_path_1='images/some_img_clothes/' . $img_name;
                $R->img_4->move('images/some_img_clothes', $img_name);
                images::insert([
                    'id_clothes'=>session()->get('id_img'),
                    'images'=>$img_path_1,
                ]);
            }
        }
        if(session()->get('name_t_img')=='computers'){
            if($R->img_1 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_1')->Extension();
                $img_path_1='images/some_img_computers/' . $img_name;
                $R->img_1->move('images/some_img_computers', $img_name);
                images::insert([
                    'id_computers'=>session()->get('id_img'),
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_2 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_2')->Extension();
                $img_path_1='images/some_img_computers/' . $img_name;
                $R->img_2->move('images/some_img_computers', $img_name);
                images::insert([
                    'id_computers'=>session()->get('id_img'),
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_3 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_3')->Extension();
                $img_path_1='images/some_img_computers/' . $img_name;
                $R->img_3->move('images/some_img_computers', $img_name);
                images::insert([
                    'id_computers'=>session()->get('id_img'),
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_4 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_4')->Extension();
                $img_path_1='images/some_img_computers/' . $img_name;
                $R->img_4->move('images/some_img_computers', $img_name);
                images::insert([
                    'id_computers'=>session()->get('id_img'),
                    'images'=>$img_path_1,
                ]);
            }
        }
    }
    public function up_images(Request $R){
        if(session()->get('name_t_img')=='cars'){
            if($R->img_1 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_1')->Extension();
                $img_path_1='images/some_img_cars/' . $img_name;
                $R->img_1->move('images/some_img_cars', $img_name);
                images::find($R->_img_1)->update([
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_2 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_2')->Extension();
                $img_path_1='images/some_img_cars/' . $img_name;
                $R->img_2->move('images/some_img_cars', $img_name);
                images::find($R->_img_2)->update([
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_3 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_3')->Extension();
                $img_path_1='images/some_img_cars/' . $img_name;
                $R->img_3->move('images/some_img_cars', $img_name);
                images::find($R->_img_3)->update([
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_4 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_4')->Extension();
                $img_path_1='images/some_img_cars/' . $img_name;
                $R->img_4->move('images/some_img_cars', $img_name);
                images::find($R->_img_4)->update([
                    'images'=>$img_path_1,
                ]);
            }

        }
        if(session()->get('name_t_img')=='computers'){
            foreach(images::where('id_computers',session()->get('id_img'))->get() as $key){
            if($R->img_1 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_1')->Extension();
                $img_path_1='images/some_img_computers/' . $img_name;
                $R->img_1->move('images/some_img_computers', $img_name);
                images::find($R->_img_1)->update([
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_2 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_2')->Extension();
                $img_path_1='images/some_img_computers/' . $img_name;
                $R->img_2->move('images/some_img_computers', $img_name);
                images::find($key->_img_2)->update([
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_3 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_3')->Extension();
                $img_path_1='images/some_img_computers/' . $img_name;
                $R->img_3->move('images/some_img_computers', $img_name);
                images::find($key->_img_3)->update([
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_4 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_4')->Extension();
                $img_path_1='images/some_img_computers/' . $img_name;
                $R->img_4->move('images/some_img_computers', $img_name);
                images::find($key->_img_4)->update([
                    'images'=>$img_path_1,
                ]);
            }
          }
        }
        if(session()->get('name_t_img')=='clothes'){
            foreach(images::where('id_clothes',session()->get('id_img'))->get() as $key){
            if($R->img_1 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_1')->Extension();
                $img_path_1='images/some_img_clothes/' . $img_name;
                $R->img_1->move('images/some_img_clothes', $img_name);
                images::find($key->_img_1)->update([
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_2 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_2')->Extension();
                $img_path_1='images/some_img_clothes/' . $img_name;
                $R->img_2->move('images/some_img_clothes', $img_name);
                images::find($key->_img_2)->update([
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_3 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_3')->Extension();
                $img_path_1='images/some_img_clothes/' . $img_name;
                $R->img_3->move('images/some_img_clothes', $img_name);
                images::find($key->_img_3)->update([
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_4 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_4')->Extension();
                $img_path_1='images/some_img_clothes/' . $img_name;
                $R->img_4->move('images/some_img_clothes', $img_name);
                images::find($key->_img_4)->update([
                    'images'=>$img_path_1,
                ]);
            }
          }
        }
        if(session()->get('name_t_img')=='books'){
            foreach(images::where('id_books',session()->get('id_img'))->get() as $key){
            if($R->img_1 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_1')->Extension();
                $img_path_1='images/some_img_books/' . $img_name;
                $R->img_1->move('images/some_img_books', $img_name);
                images::find($key->_img_1)->update([
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_2 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_2')->Extension();
                $img_path_1='images/some_img_books/' . $img_name;
                $R->img_2->move('images/some_img_books', $img_name);
                images::find($key->_img_2)->update([
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_3 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_3')->Extension();
                $img_path_1='images/some_img_books/' . $img_name;
                $R->img_3->move('images/some_img_books', $img_name);
                images::find($key->_img_3)->update([
                    'images'=>$img_path_1,
                ]);
            }
            if($R->img_4 !=null){
                $img_name = microtime(true) . '.' . $R->file('img_4')->Extension();
                $img_path_1='images/some_img_books/' . $img_name;
                $R->img_4->move('images/some_img_books', $img_name);
                images::find($key->_img_4)->update([
                    'images'=>$img_path_1,
                ]);
            }
         }
        }
    }
}
