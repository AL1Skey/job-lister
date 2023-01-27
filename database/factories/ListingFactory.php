<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     // Tags Gen database
    private $tags = ['HTML','CSS','Javascript','PHP','Bootstrap','MySQL','C++','C','Django','JavaSpring','React','React Native','VueJS','Flutter','PostgreSQL','NodeJS','ExpressJS','TailwindCSS'];
    
    // Jobs title Gen Database
    private $jobs = ['Full Stack', 'Front-End','Back-End','Developer','Senior','Junior'];
    
    // Tags Generator
    private function tagsGen(){
        $max = count($this->tags) - 1; // Set length of $tags array
        $index = random_int(1, 4 ); // Set length of  return value
        $tags = []; // Initialize return value

        for( $i=0; $i <= $index; $i++ ){ // Loop until reach the length
            $temp = $this->tags[random_int(1,$max)]; // set temporary variable

            if( !in_array( $temp, $tags ) ){ // if there's no same value inside return value
                $tags[$i] = $temp; // push temporary value to return variable
            }   
        }
        
        return implode(",",$tags);// Convert array to string with coma as separator
    }

    // Jobs Generator
    private function jobsGen(){
        $tags = explode( ',', $this->tagsGen() ); // Convert return value from tagsGen to array
        $jobTitle = $this->jobs[random_int( 0, 2 )] . ' ' . $tags[random_int( 0, ( count( $tags ) - 1 ) )] . ' Developer';// Make Jobtitle from avaliable data inside this class as string

        return $jobTitle;// Return jobTitle
        
    }

    public function definition()
    {
        return [
            'title'=>$this->jobsGen(),
            'tags'=>$this->tagsGen(),
            'company'=>$this->faker->company(),
            'email'=>$this->faker->companyEmail(),
            'website'=>$this->faker->url(),
            'location'=>$this->faker->city(),
            'desc'=>$this->faker->paragraph(10)
        ];
    }
}
