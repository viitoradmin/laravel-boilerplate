<?php

namespace App\Modules\Core\Traits;

use App\Exceptions\Handler;
use App\Modules\Core\Controllers\ApiController;
use Exception;
use Illuminate\Http\JsonResponse;
use App\Modules\Core\Constants\Constants;

trait ApiResponses
{
    /**
     * @var int
     */
    public int $responseCode = Constants::HTTP_OK;

    /**
     * @var string
     */
    public string $message = 'OK';

    /**
     * @var string
     */
    public string $title = 'Success';

    /**
     * @param int $code
     * @return $this
     */
    public function setCode(int $code = Constants::HTTP_OK): self
    {
        $this->responseCode = $code;
        return $this;
    }

    /**
     * @param $message
     * @return Handler|ApiController|ApiResponses
     */
    public function setMessage($message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @param $title
     * @return Handler|ApiController|ApiResponses
     */
    public function setTitle($title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param $data
     * @return JsonResponse
     */
    public function respond($data): JsonResponse
    {
        return response()
            ->json(
                [
                    'message' => $this->message,
                    'code' => $this->responseCode,
                    'data' => $data
                ],
                $this->responseCode
            );
    }

    /**
     * @param Exception $exception
     * @param array $data
     * @param string $title
     * @return JsonResponse
     */
    public function exceptionRespond(Exception $exception, array $data = [], string $title = 'Error'): JsonResponse
    {
        return response()->json(
            [
                'title' => $title,
                'message' => $exception->getMessage(),
                'code' => $exception->getCode(),
            ],
            $exception->getCode()
        );
    }

    /**
     * @param Exception $exception
     * @param string $title
     * @return JsonResponse
     */
    public function respondWithExceptionError(Exception $exception, string $title = 'Error'): JsonResponse
    {
        return response()
            ->json(
                [
                    'title' => $this->title,
                    'message' => $this->message,
                ],
                $exception->getCode()
            );
    }

    /**
     * @param $message
     * @param $code
     * @return JsonResponse
     */
    protected function errorResponse($message, $code): JsonResponse
    {
        return response()->json(['message' => $message, 'code' => $code], $code);
    }

    /**
     * @param $data
     * @param $code
     * @return JsonResponse
     */
    private function successResponse($data, $code): JsonResponse
    {
        return response()->json($data, $code);
    }
}
