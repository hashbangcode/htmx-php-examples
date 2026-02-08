<?php

class Htmx
{

    public static function isHtmxRequest(): bool
    {
        return isset($_SERVER['HTTP_HX_REQUEST']) && $_SERVER['HTTP_HX_REQUEST'] === 'true';
    }

    public static function isBoosted(): bool
    {
        return isset($_SERVER['HTTP_HX_BOOSTED']) && $_SERVER['HTTP_HX_BOOSTED'] == 'true';
    }

    public static function getCurrentUrl(): ?string
    {
        return $_SERVER['HTTP_HX_CURRENT_URL'] ?? null;
    }

    public static function isHistoryRestoreRequest(): ?string
    {
        return isset($_SERVER['HTTP_HX_HISTORY_RESTORE_REQUEST']) && $_SERVER['HTTP_HX_HISTORY_RESTORE_REQUEST'] == 'true';
    }

    public static function getPrompt(): ?string
    {
        return $_SERVER['HTTP_HX_PROMPT'] ?? null;
    }

    public static function getTarget(): ?string
    {
        return $_SERVER['HTTP_HX_TARGET'] ?? null;
    }

    public static function getTriggerName(): ?string
    {
        return $_SERVER['HTTP_HX_TRIGGER_NAME'] ?? null;
    }

    public static function getTrigger(): ?string
    {
        return $_SERVER['HTTP_HX_TRIGGER'] ?? null;
    }

    public static function noContent(): void
    {
        http_response_code(204);
    }

    public static function cancelPolling(): void
    {
        http_response_code(286);
    }

    /**
     * @param array $locationData
     *   The location data
     *
     * @see https://htmx.org/headers/hx-location/
     */
    public static function sendLocation(array $locationData): void {
        header('HX-Location: ' . json_encode($locationData));
    }

    /**
     * @param string $url
     *
     * @see https://htmx.org/headers/hx-push-url/
     */
    public static function pushUrl(string $url): void {
        header('HX-Push-Url: ' . $url);
    }

    /**
     * @param string $url
     *
     * @see https://htmx.org/headers/hx-redirect/
     */
    public static function redirect(string $url): void {
        header('HX-Redirect: ' . $url);
    }

    public static function replaceUrl(string $url): void {
        header('HX-Replace-Url: ' . $url);
    }

    public static function refresh(): void {
        header('HX-Refresh: true');
    }

    public static function reswap(string $value): void {
        header('HX-Reswap: ' . $value);
    }

    public static function retarget(string $selector): void {
        header('HX-Retarget: ' . $selector);
    }

    public static function location(array $locationData): void {
        header('HX-Location: ' . json_encode($locationData));
    }

    public static function reselect(string $selector): void {
        header('HX-Reselect: ' . $selector);
    }

    public static function isGet(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'GET';
    }

    public static function isPost(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    public static function isPut(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'PUT';
    }

    public static function isDelete(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'DELETE';
    }

    public static function isPatch(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'PATCH';
    }

}
