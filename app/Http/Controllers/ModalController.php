<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Question;

class ModalController extends Controller
{
    protected $idQuestion;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     * Handler selected Child-Question:
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->session()->put('id', $request->id);
        return view('modal.create', [
            'answer'  => [],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->session()->get('id');
        $answer = Answer::create(['text' => $request->text, 'parent_id' => $id]);
        return redirect()->route('modal.show', $answer->questionParent);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $question = Question::find($id);
        return view('modal.show', [
            'question'  => $question,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $answer = Answer::find($id);
        return view('modal.edit', [
            'answer'  => $answer,
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $answer = Answer::find($id);
        $answer->update($request->all());
        return redirect()->route('modal.show', $answer->questionParent);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $answer = Answer::find($id);
        $answer->delete();
        return redirect()->route('modal.show', $answer->questionParent);
    }

    public function editquestion(Request $request)
    {
        $answer = Answer::find($request->id);
        $answer->update(['child_id' => $request->child_id]);
        return view('modal.show', [
            'question'  => $answer->questionParent,
        ]);
    }
}
