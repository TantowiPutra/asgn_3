<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function returnData()
    {
        $data =
            [
                [
                    "type" => "Machine Learning",
                    "slug" => "Ini Machine Learning",
                    "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quibusdam sequi necessitatibus voluptates sed, quae, similique corrupti sint quos soluta, distinctio praesentium rem illo iste consequuntur eaque dignissimos. Quam nobis possimus dolorem quisquam, numquam non blanditiis perferendis, minima, et fugiat minus nemo. Magni fugit deleniti quibusdam voluptatem nostrum sit facere consectetur excepturi dolores earum pariatur, reprehenderit dolorum sequi veniam dignissimos. Doloremque dolorum eos vel sint sit, exercitationem porro mollitia ipsam rem nam est similique, corporis repellendus, provident dolore. Quam, voluptates tempore, voluptatem corporis voluptatum minima qui provident minus consequuntur cumque sit dolore expedita voluptatibus fugit incidunt, accusantium iure hic nihil!",
                    "author" => "Tantowi Putra"
                ],

                [
                    "type" => "Artificial Intelligence",
                    "slug" => "Ini Artificial Intelligence",
                    "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quibusdam sequi necessitatibus voluptates sed, quae, similique corrupti sint quos soluta, distinctio praesentium rem illo iste consequuntur eaque dignissimos. Quam nobis possimus dolorem quisquam, numquam non blanditiis perferendis, minima, et fugiat minus nemo. Magni fugit deleniti quibusdam voluptatem nostrum sit facere consectetur excepturi dolores earum pariatur, reprehenderit dolorum sequi veniam dignissimos. Doloremque dolorum eos vel sint sit, exercitationem porro mollitia ipsam rem nam est similique, corporis repellendus, provident dolore. Quam, voluptates tempore, voluptatem corporis voluptatum minima qui provident minus consequuntur cumque sit dolore expedita voluptatibus fugit incidunt, accusantium iure hic nihil!",
                    "author" => "Agung Setiawan"
                ],

                [
                    "type" => "Web Programming",
                    "slug" => "Ini Web Programming",
                    "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quibusdam sequi necessitatibus voluptates sed, quae, similique corrupti sint quos soluta, distinctio praesentium rem illo iste consequuntur eaque dignissimos. Quam nobis possimus dolorem quisquam, numquam non blanditiis perferendis, minima, et fugiat minus nemo. Magni fugit deleniti quibusdam voluptatem nostrum sit facere consectetur excepturi dolores earum pariatur, reprehenderit dolorum sequi veniam dignissimos. Doloremque dolorum eos vel sint sit, exercitationem porro mollitia ipsam rem nam est similique, corporis repellendus, provident dolore. Quam, voluptates tempore, voluptatem corporis voluptatum minima qui provident minus consequuntur cumque sit dolore expedita voluptatibus fugit incidunt, accusantium iure hic nihil!",
                    "author" => "Saya Sapi"
                ],

                [
                    "type" => "Competitive Programming",
                    "slug" => "Ini Competitive Programming",
                    "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quibusdam sequi necessitatibus voluptates sed, quae, similique corrupti sint quos soluta, distinctio praesentium rem illo iste consequuntur eaque dignissimos. Quam nobis possimus dolorem quisquam, numquam non blanditiis perferendis, minima, et fugiat minus nemo. Magni fugit deleniti quibusdam voluptatem nostrum sit facere consectetur excepturi dolores earum pariatur, reprehenderit dolorum sequi veniam dignissimos. Doloremque dolorum eos vel sint sit, exercitationem porro mollitia ipsam rem nam est similique, corporis repellendus, provident dolore. Quam, voluptates tempore, voluptatem corporis voluptatum minima qui provident minus consequuntur cumque sit dolore expedita voluptatibus fugit incidunt, accusantium iure hic nihil!",
                    "author" => "Saya Ikan"
                ],

                [
                    "type" => "Geodatabase",
                    "slug" => "Ini Machine Learning",
                    "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quibusdam sequi necessitatibus voluptates sed, quae, similique corrupti sint quos soluta, distinctio praesentium rem illo iste consequuntur eaque dignissimos. Quam nobis possimus dolorem quisquam, numquam non blanditiis perferendis, minima, et fugiat minus nemo. Magni fugit deleniti quibusdam voluptatem nostrum sit facere consectetur excepturi dolores earum pariatur, reprehenderit dolorum sequi veniam dignissimos. Doloremque dolorum eos vel sint sit, exercitationem porro mollitia ipsam rem nam est similique, corporis repellendus, provident dolore. Quam, voluptates tempore, voluptatem corporis voluptatum minima qui provident minus consequuntur cumque sit dolore expedita voluptatibus fugit incidunt, accusantium iure hic nihil!",
                    "author" => "Wibu Bau Bawang"
                ],

                [
                    "type" => "Paper Publish",
                    "slug" => "CNN Algorithm",
                    "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quibusdam sequi necessitatibus voluptates sed, quae, similique corrupti sint quos soluta, distinctio praesentium rem illo iste consequuntur eaque dignissimos. Quam nobis possimus dolorem quisquam, numquam non blanditiis perferendis, minima, et fugiat minus nemo. Magni fugit deleniti quibusdam voluptatem nostrum sit facere consectetur excepturi dolores earum pariatur, reprehenderit dolorum sequi veniam dignissimos. Doloremque dolorum eos vel sint sit, exercitationem porro mollitia ipsam rem nam est similique, corporis repellendus, provident dolore. Quam, voluptates tempore, voluptatem corporis voluptatum minima qui provident minus consequuntur cumque sit dolore expedita voluptatibus fugit incidunt, accusantium iure hic nihil!",
                    "author" => "Saya Kambing"
                ]

            ];
        return view('projects', [
            'status' => 'project',
            "projects" => $data
        ]);
    }

    public function returnSpes($type)
    {
        // Data simulasi (belum diambil dari database)
        $datas =
            [
                [
                    "type" => "Machine Learning",
                    "slug" => "Ini Machine Learning",
                    "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quibusdam sequi necessitatibus voluptates sed, quae, similique corrupti sint quos soluta, distinctio praesentium rem illo iste consequuntur eaque dignissimos. Quam nobis possimus dolorem quisquam, numquam non blanditiis perferendis, minima, et fugiat minus nemo. Magni fugit deleniti quibusdam voluptatem nostrum sit facere consectetur excepturi dolores earum pariatur, reprehenderit dolorum sequi veniam dignissimos. Doloremque dolorum eos vel sint sit, exercitationem porro mollitia ipsam rem nam est similique, corporis repellendus, provident dolore. Quam, voluptates tempore, voluptatem corporis voluptatum minima qui provident minus consequuntur cumque sit dolore expedita voluptatibus fugit incidunt, accusantium iure hic nihil!",
                    "author" => "Tantowi Putra"
                ],

                [
                    "type" => "Artificial Intelligence",
                    "slug" => "Ini Artificial Intelligence",
                    "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quibusdam sequi necessitatibus voluptates sed, quae, similique corrupti sint quos soluta, distinctio praesentium rem illo iste consequuntur eaque dignissimos. Quam nobis possimus dolorem quisquam, numquam non blanditiis perferendis, minima, et fugiat minus nemo. Magni fugit deleniti quibusdam voluptatem nostrum sit facere consectetur excepturi dolores earum pariatur, reprehenderit dolorum sequi veniam dignissimos. Doloremque dolorum eos vel sint sit, exercitationem porro mollitia ipsam rem nam est similique, corporis repellendus, provident dolore. Quam, voluptates tempore, voluptatem corporis voluptatum minima qui provident minus consequuntur cumque sit dolore expedita voluptatibus fugit incidunt, accusantium iure hic nihil!",
                    "author" => "Agung Setiawan"
                ],

                [
                    "type" => "Web Programming",
                    "slug" => "Ini Web Programming",
                    "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quibusdam sequi necessitatibus voluptates sed, quae, similique corrupti sint quos soluta, distinctio praesentium rem illo iste consequuntur eaque dignissimos. Quam nobis possimus dolorem quisquam, numquam non blanditiis perferendis, minima, et fugiat minus nemo. Magni fugit deleniti quibusdam voluptatem nostrum sit facere consectetur excepturi dolores earum pariatur, reprehenderit dolorum sequi veniam dignissimos. Doloremque dolorum eos vel sint sit, exercitationem porro mollitia ipsam rem nam est similique, corporis repellendus, provident dolore. Quam, voluptates tempore, voluptatem corporis voluptatum minima qui provident minus consequuntur cumque sit dolore expedita voluptatibus fugit incidunt, accusantium iure hic nihil!",
                    "author" => "Saya Sapi"
                ],

                [
                    "type" => "Competitive Programming",
                    "slug" => "Ini Competitive Programming",
                    "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quibusdam sequi necessitatibus voluptates sed, quae, similique corrupti sint quos soluta, distinctio praesentium rem illo iste consequuntur eaque dignissimos. Quam nobis possimus dolorem quisquam, numquam non blanditiis perferendis, minima, et fugiat minus nemo. Magni fugit deleniti quibusdam voluptatem nostrum sit facere consectetur excepturi dolores earum pariatur, reprehenderit dolorum sequi veniam dignissimos. Doloremque dolorum eos vel sint sit, exercitationem porro mollitia ipsam rem nam est similique, corporis repellendus, provident dolore. Quam, voluptates tempore, voluptatem corporis voluptatum minima qui provident minus consequuntur cumque sit dolore expedita voluptatibus fugit incidunt, accusantium iure hic nihil!",
                    "author" => "Saya Ikan"
                ],

                [
                    "type" => "Geodatabase",
                    "slug" => "Ini Machine Learning",
                    "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quibusdam sequi necessitatibus voluptates sed, quae, similique corrupti sint quos soluta, distinctio praesentium rem illo iste consequuntur eaque dignissimos. Quam nobis possimus dolorem quisquam, numquam non blanditiis perferendis, minima, et fugiat minus nemo. Magni fugit deleniti quibusdam voluptatem nostrum sit facere consectetur excepturi dolores earum pariatur, reprehenderit dolorum sequi veniam dignissimos. Doloremque dolorum eos vel sint sit, exercitationem porro mollitia ipsam rem nam est similique, corporis repellendus, provident dolore. Quam, voluptates tempore, voluptatem corporis voluptatum minima qui provident minus consequuntur cumque sit dolore expedita voluptatibus fugit incidunt, accusantium iure hic nihil!",
                    "author" => "Wibu Bau Bawang"
                ],

                [
                    "type" => "Paper Publish",
                    "slug" => "CNN Algorithm",
                    "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quibusdam sequi necessitatibus voluptates sed, quae, similique corrupti sint quos soluta, distinctio praesentium rem illo iste consequuntur eaque dignissimos. Quam nobis possimus dolorem quisquam, numquam non blanditiis perferendis, minima, et fugiat minus nemo. Magni fugit deleniti quibusdam voluptatem nostrum sit facere consectetur excepturi dolores earum pariatur, reprehenderit dolorum sequi veniam dignissimos. Doloremque dolorum eos vel sint sit, exercitationem porro mollitia ipsam rem nam est similique, corporis repellendus, provident dolore. Quam, voluptates tempore, voluptatem corporis voluptatum minima qui provident minus consequuntur cumque sit dolore expedita voluptatibus fugit incidunt, accusantium iure hic nihil!",
                    "author" => "Saya Kambing"
                ]

            ];

        foreach ($datas as $data) {
            if ($data["type"] == $type) {
                return view('project', [
                    'status' => 'project',
                    "project" => $data
                ]);
            }
        }
    }
}
