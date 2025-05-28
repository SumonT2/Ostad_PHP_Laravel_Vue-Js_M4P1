<?php
trait FileHandler {
    private $file = __DIR__ . '/../../data/vehicles.json';

    private function readData() {
        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode([]));
        }
        $data = file_get_contents($this->file);
        return json_decode($data, true);
    }

    private function writeData($data) {
        file_put_contents($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }
}
