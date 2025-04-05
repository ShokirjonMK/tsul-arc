<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MkPinflController extends Controller
{
    public function handle(Request $request)
    {
        $authHeader = $request->header('Authorization');
        $expectedToken = 'Basic bWs6bWtAMTIz'; // mk:mk@123

        if ($authHeader !== $expectedToken) {
            return response()->json(['message' => 'Unauthorized'], 401, [
                'WWW-Authenticate' => 'Basic realm="API Access"'
            ]);
        }

        $pinfl = $request->input('pinfl');

        if (!$pinfl || strlen($pinfl) != 14 || !ctype_digit($pinfl)) {
            return response()->json([
                'status' => 'error',
                'message' => 'pinfl noto‘g‘ri'
            ], 400);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'pinfl noto‘g‘ri'
        ], 400);

        $result = $this->getDataFromAdliya($pinfl, '2000-01-01');
        return response()->json($result, $result['status'] ? 200 : 500);
    }

    private function getDataFromAdliya($pin, $document_issue_date)
    {
        $data = ['status' => false, 'error' => []];

        try {
            $client = new Client([
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Api-token' => $this->getToken(),
                ]
            ]);

            $response = $client->post('http://10.190.24.138:7075', [
                'body' => json_encode([
                    'jsonrpc' => '2.2',
                    'id' => 'ID',
                    'method' => 'adliya.get_personal_data_by_pin',
                    'params' => [
                        'pin' => $pin,
                        'document_issue_date' => $document_issue_date
                    ]
                ])
            ]);

            if ($response->getStatusCode() == 200) {
                $res = json_decode($response->getBody()->getContents());

                if (isset($res->result)) {
                    $result = $res->result;

                    if (!empty($result->photo)) {
                        $result->avatar = $result->photo; // Faylga yozmasdan, JSONga qaytariladi
                    }

                    $data['status'] = true;
                    $data['data'] = $result;
                } else {
                    $data['error'][] = $res->error ?? 'Nomaʼlum xatolik';
                }
            } else {
                $data['error'][] = 'HTTP status: ' . $response->getStatusCode();
            }
        } catch (\Throwable $e) {
            $data['error'][] = 'Xatolik: ' . $e->getMessage();
        }

        return $data;
    }

    // Tokenni ochiq yozmasdan base64 dekod orqali olish
    private function getToken()
    {
        // Shifrlangan holatda saqlanmoqda
        $encoded = 'QkY5RjlCMEMtOTI3My00MDcyLUE4MTUtQTUxQUM5MDVGRTlB';
        return base64_decode($encoded);
    }
}
