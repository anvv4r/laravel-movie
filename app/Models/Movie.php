<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MovieType;
use App\Models\Genre;
use App\Models\Person;
use App\Models\Language;
use App\Models\Certification;
use App\Models\OriginCountry;
use App\Models\Status;

class Movie extends Model
{
    use HasFactory;

    public function movieType()
    {
        return $this->belongsTo(MovieType::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function people()
    {
        return $this->belongsToMany(Person::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

    public function certifications()
    {
        return $this->belongsToMany(Certification::class);
    }

    public function originCountries()
    {
        return $this->belongsToMany(OriginCountry::class);
    }

    public function statuses()
    {
        return $this->belongsToMany(Status::class);
    }
}