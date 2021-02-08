<?php

namespace App\Http\Controllers;

use App\Item;
use App\Category;
use App\Room;
use App\Student;
use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class HomeController extends Controller
{
    public function index()
    {
        // $process = new Process(['../../../../Users/lenovo/Documents/MCDM_Package/Main.py']);
        // $process = new Process(['../../../../Users/lenovo/apitest.py']);
        // $process = new Process(['test.py'], null, [
        //     'USERPROFILE' => 'C:\Users\lenovo'
        // ]);

        $process = Process::fromShellCommandline('py test.py', null, [
            'USERPROFILE' => 'C:\Users\lenovo'
        ]);

        // $process = Process::fromShellCommandline('ls');

        // $process->run();

        $respond = "Failed";
        // if ($process->isSuccessful()) {
        //     $respond = dd($process)->getOutput();
        // }

        $process->start();
        $process->wait();
        if ($process->isSuccessful()) {
            $respond = $process->getOutput();
        }

        return view('home', [
            'items' => Item::all(),
            'categories' => Category::all(),
            'respond' => $respond
        ]);
    }

    public function faq() {
        return view('faq');
    }

    public function test() {

        $item = Item::find(1)->name;

        $rooms = Room::paginate(15);

        return view('test', [
            'respond' => $item,
            'rooms' => $rooms
        ]);
    }

    public function get_api() {

        $process = new Process(['test.py']);
        // $process = new Process(['ls']);
        // $process = new Process(['python',  'c:/xampp/htdocs/newpix/public/test.py']);
        $process->run();

        $respond = "Failed";
        if (($process)->isSuccessful()) {
                $respond = $process->getOutput() == "" ? 
                                "Success but no output" : $process->getOutput();
        } else {
            $respond = $process->getErrorOutput();
            // throw new ProcessFailedException($process);
        }

        return response()->json([
            'test' => "Good morning!",
            'respond' => $respond
        ]);
    }

    public function post_api(Request $request) {

        Item::find(1)->update(['name' => $request->name]);

        return response()->json([
            // 'test' => "Good morning!"
        ]);
    }

    public function py_get_api() {

        return response()->json([
            'item' => Item::first()
        ]);
    }

    public function get_mcdm()
    {
        $process = new Process(['MCDM_Package/Main.py']);
        $process->run();

        return response()->json([
            'respond' => $process->getOutput()
        ]);
    }
}
