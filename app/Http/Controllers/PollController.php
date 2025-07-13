<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use App\Models\Vote;
use Illuminate\Http\Request;

class PollController extends Controller
{


    public function index()
    {
        $polls = Poll::with('options')->where('status', 'open')->get();
        return view('voter.polls', compact('polls'));
    }

    public function vote(Request $request, Poll $poll)
    {
        $request->validate([
            'option_id' => 'required|exists:options,id',
        ]);

        // Se quiser bloquear votos duplicados
        if (Vote::where('poll_id', $poll->id)->where('user_id', auth()->id())->exists()) {
            return back()->with('error', 'Você já votou nessa enquete.');
        }

        Vote::create([
            'poll_id' => $poll->id,
            'option_id' => $request->option_id,
            'user_id' => auth()->id(), // remover se voto anônimo
        ]);

        return redirect()->route('polls.index')->with('success', 'Voto registrado com sucesso!');
    }
}
