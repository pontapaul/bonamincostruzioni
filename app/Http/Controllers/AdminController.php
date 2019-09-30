<?php

namespace App\Http\Controllers;

use App\CaseHistory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Arr;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('admin.dashboard', [
            'cases' => CaseHistory::all(),
        ]);
    }

    /**
     * Show the case histories form.
     *
     * @param null $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showForm($id = null)
    {
        $model = $id ? CaseHistory::findOrFail($id) : new CaseHistory();

        return view('admin.cases-form', compact('model'));
    }

    /**
     * @param int|null $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function processForm($id = null)
    {
        $data = request()->all();
        /** @var UploadedFile $thumbnail */
        $thumbnail = Arr::pull($data, 'thumbnail');
        $gallery = Arr::pull($data, 'gallery');

        $data['enabled'] = !!($data['enabled'] ?? false);
        $data['homepage'] = !!($data['homepage'] ?? false);

        Arr::pull($data, '_token');

        try {
            $model = $model = $id ? CaseHistory::findOrFail($id)->fill($data) : new CaseHistory($data);

            if ($model->exists) {
                if ($thumbnail) {
                    $model->clearMediaCollection('thumbnail');
                }
                if ($gallery) {
                    $model->clearMediaCollection('gallery');
                }
            }

            if ($thumbnail) {
                $model->addMedia($thumbnail)->toMediaCollection('thumbnail');
            }
            if ($gallery) {
                collect($gallery)->each(function ($media) use ($model) {
                    $model->addMedia($media)->toMediaCollection('gallery');
                });
            }

            $model->save();

            return redirect()->route('dashboard')->with('success', true);
        } catch (\Exception $e) {
            return redirect()->back()->withInput();
        }
    }

    /**
     * @param integer $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $model = CaseHistory::findOrFail($id);

        $model->delete();

        return redirect()->back();
    }
}
